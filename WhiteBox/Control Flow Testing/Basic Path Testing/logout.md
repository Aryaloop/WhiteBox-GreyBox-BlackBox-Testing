## Fungsi logout

```php
if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../pages/login.php");
    exit();
}
```    return redirect(url_for('login'))
```
Flow Diagram
```
(1) ──> [Cek $_GET['logout'] == 'true']
  |
  v
(2) Start session → unset → destroy
  |
  v
(3) Redirect ke login
