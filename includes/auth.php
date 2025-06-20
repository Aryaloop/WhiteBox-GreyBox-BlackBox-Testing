<?php
require_once 'config.php';

require '../vendor/autoload.php'; // Pastikan sudah install PHPMailer pakai composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function registerUser($conn, $name, $email, $address, $phone, $username, $password)
{
    $conn->begin_transaction();
    try {
        // Cek duplikat email atau username
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ? OR username = ?");
        if (!$stmt) {
            throw new Exception("Prepare statement gagal: " . $conn->error);
        }
        $stmt->bind_param("ss", $email, $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            throw new Exception("Email atau username sudah digunakan.");
        }
        $stmt->free_result();
        $stmt->close();

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Generate kode verifikasi
        $verificationCode = bin2hex(random_bytes(16));

        // Insert user baru
        $stmt = $conn->prepare("INSERT INTO users (name, email, address, phone, username, password, verification_code) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $name, $email, $address, $phone, $username, $hashedPassword, $verificationCode);
        $stmt->execute();
        $stmt->close();

        // Kirim email verifikasi
        sendVerificationEmail($email, $verificationCode);

        $conn->commit();
        return "Registrasi berhasil. Silakan cek email untuk verifikasi.";
    } catch (Exception $e) {
        $conn->rollback();
        throw $e;
    }
}

function sendVerificationEmail($toEmail, $verificationCode)
{
    $mail = new PHPMailer(true);
    try {
        // Konfigurasi SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP server Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'aryaabdulmughni18@gmail.com'; // Ganti dengan email kamu
        $mail->Password = ''; // Ganti dengan app password kamu
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('aryaabdulmughni18@gmail.com', 'Login');
        $mail->addAddress($toEmail);
        $mail->Subject = 'Verifikasi Email Anda';
        $mail->Body    = "Klik link berikut untuk verifikasi akun Anda: http://localhost/tugas-sqa-mail/pages/verify.php?code=$verificationCode";

        $mail->send();
    } catch (Exception $e) {
        throw new Exception("Email tidak dapat dikirim. Mailer Error: {$mail->ErrorInfo}");
    }
}

function loginUser($conn, $username, $password)
{
    $stmt = $conn->prepare("SELECT id, password, is_verified FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        throw new Exception("Username tidak ditemukan.");
    }

    $user = $result->fetch_assoc();

    // Cek password
    if (!password_verify($password, $user['password'])) {
        throw new Exception("Password salah.");
    }

    // Cek apakah sudah verifikasi email
    if ($user['is_verified'] != 1) {
        throw new Exception("Email belum diverifikasi. Silakan cek email Anda.");
    }

    // Simpan data login ke session
    session_start();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $username;

    // Redirect ke dashboard
    header("Location: ../pages/dashboard.php");
    exit;
}

function forgotPassword($conn, $email)
{
    // Cek apakah email ada
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        throw new Exception("Email tidak ditemukan.");
    }

    // Generate reset token dan expiry
    $resetToken = bin2hex(random_bytes(16));
    $expiryTime = date('Y-m-d H:i:s', strtotime('+8 hour'));

    // Simpan reset token ke database
    $stmt = $conn->prepare("UPDATE users SET reset_token = ?, reset_token_expiry = ? WHERE email = ?");
    $stmt->bind_param("sss", $resetToken, $expiryTime, $email);
    $stmt->execute();
    $stmt->close();

    // Kirim email reset password
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'aryaabdulmughni18@gmail.com';
        $mail->Password = '';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('aryaabdulmughni18@gmail.com', 'Reset Password');
        $mail->addAddress($email);
        $mail->Subject = 'Reset Password';
        $mail->Body    = "Klik link berikut untuk reset password Anda: http://localhost/tugas-sqa-mail/pages/reset-password.php?token=$resetToken";

        $mail->send();
    } catch (Exception $e) {
        throw new Exception("Gagal mengirim email reset password: {$mail->ErrorInfo}");
    }
}

// ==========================
// === HANDLER SECTION ====
// ==========================

// if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'register') {
//     try {
//         $message = registerUser($conn, $_POST['name'], $_POST['email'], $_POST['address'], $_POST['phone'], $_POST['username'], $_POST['password']);
//         echo $message;
//     } catch (Exception $e) {
//         echo "Gagal: " . $e->getMessage();
//     }
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'login') {
    try {
        // === Verifikasi reCAPTCHA ===
        $secret = '6Ld0BVErAAAAAKnG4rYaHZiT8Qbo5bHFe7p0HdZO';
        $captcha_response = $_POST['g-recaptcha-response'] ?? '';

        if (empty($captcha_response)) {
            header("Location: ../pages/login.php?error=empty");
            exit();
        }

        $verify_response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$captcha_response}&remoteip=" . $_SERVER['REMOTE_ADDR']);
        $response_data = json_decode($verify_response);

        if (!$response_data->success) {
            header("Location: ../pages/login.php?error=captcha");
            exit();
        }
        // === End reCAPTCHA ===

        // Lanjut login jika captcha sukses
        loginUser($conn, $_POST['username'], $_POST['password']);
    } catch (Exception $e) {
        echo "Gagal: " . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'forgot_password') {
    try {
        forgotPassword($conn, $_POST['email']);
        header("Location: ../pages/forgot-password.php?success=1");
        exit();
    } catch (Exception $e) {
        echo "Gagal: " . $e->getMessage();
    }
}

if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../pages/login.php");
    exit();
}
