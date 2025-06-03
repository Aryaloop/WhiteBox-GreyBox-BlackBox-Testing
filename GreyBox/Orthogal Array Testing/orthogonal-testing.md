| Test ID | Email Format | Username  | Password | Phone Format | Outcome           |
| ------- | ------------ | --------- | -------- | ------------ | ----------------- |
| OAT01   | Valid        | Valid     | Valid    | Valid        | ✅ Register        |
| OAT02   | Invalid      | Valid     | Valid    | Valid        | ❌ Error Email     |
| OAT03   | Valid        | Valid     | Invalid  | Valid        | ❌ Error Password  |
| OAT04   | Valid        | Valid     | Valid    | Invalid      | ❌ Error Phone     |
| OAT05   | Valid        | Duplicate | Valid    | Valid        | ❌ Username Exists |
