** Encryption Assignment**

### **Class Structure**
```
|- lib/
|  - Crypto/
|    - Cryptograph/
|      - CryptographInterface.php
|    - Encryptions/
|      - Encryption.php
|    - EncryptionsFactory/
|      - EncryptionFactory.php
|- Vendor/
|- index.php
|-EncryptUnitTest.php
|- composer.json
|- composer.lock
```

- Cryptography Interface
- Encryption Implements Cryptographer
  - Encrypt Methos
  - Decrypt Method
- EncryptionFactory method for Encryption
   Helps to modify, rename, or replace the Encryption class later on you can do so and you will
   only have to modify the code in the factory.
- Index.php that load Autoload Vendor via PS-4 autoload method

**Output**

```
Original Plain Text: Abhijeet.Kalsi

Encrypted Data: bDVwZ0JWTkpPekNtaEwxR295ZGFJQT09

Decoded Data: Abhijeet.Kalsi
```

---------------

### PHPUnit Test

To install PHPUnit via composer
`composer install`

Command to run the test
`vendor/bin/phpunit EncryptUnitTest.php`

**Output**
```
PHPUnit 9.4.3 by Sebastian Bergmann and contributors.
.                                                                   1 / 1 (100%)
\n Original Plain Text 1: Abhijeet.Kalsi\nOriginal Plain Text 2: SRIJAN

Time: 00:00.006, Memory: 4.00 MB

OK (1 test, 2 assertions)
```

