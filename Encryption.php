<?php

namespace Encryption;

include 'Cryptography.php';

use Cryptography;

/**
 * Provides cryptographic services,
 * including secure encoding and decoding of data, as well.
 */
class Encryption implements Cryptography
{
    /**
     * The cipher method.
     */
    const ENCRYPT_METHOD = "AES-256-CBC";
    
    /*
     * A Secret Key.
     */
    const SECRET_KEY = 'my_secret_key';
    
    /*
     * A non-NULL Initialization Vector.
     */
    const SECRET_IV = 'xxxxxxxxxxxxxxxxxxxxxxxxx';

    /**
     * The plaintext message data to be encrypted.
     */
    private $painText;

    /*
    * The encrypted message to be decrypted.
    */
    private $encryptVar;

    public function __construct($painText)
    {
        $this->painText = $painText;
    }

    /*
    * Returns the encrypted string on success or FALSE on failure.
    * @return String encrypted data OR Boolean.
    */
    public function encrypt()
    {
        $output = false;
       
        // hash
        $key = hash('sha256', self::SECRET_KEY);
        // iv - encrypt method AES-256-CBC expects 16 bytes
        $iv = substr(hash('sha256', self::SECRET_IV), 0, 16);

        $output = openssl_encrypt($this->painText, self::ENCRYPT_METHOD, $key, 0, $iv);
        $this->encryptVar = base64_encode($output);

        return $this->encryptVar;
    }

    /*
    * The decrypted string on success or FALSE on failure.
    * @return String decrypted data OR Boolean.
    */
    public function decrypt()
    {
        $output = false;
       
        // hash
        $key = hash('sha256', self::SECRET_KEY);
        // iv - encrypt method AES-256-CBC expects 16 bytes
        $iv = substr(hash('sha256', self::SECRET_IV), 0, 16);

        $output = openssl_decrypt(base64_decode($this->encryptVar), self::ENCRYPT_METHOD, $key, 0, $iv);

        return $output;
    }
}

/**
 * Factory Pattern method.
 */
class EncryptionFactory
{
    public static function create($painText)
    {
        return new Encryption($painText);
    }
}

$testData = "Abhijeet1";

// have the factory create the Encryption object
$myObj = EncryptionFactory::create($testData);

echo '<br><br>Original Plain Text: ' . $testData;

// Calls to Encrypt Methods.
$encryptedData = $myObj->encrypt();

if ($encryptedData) {
    echo '<br><br> Encrypted Data: ' . $encryptedData;
} else {
    echo '<br><br>Sorry! Encryption Fails';
}
// Calls to Encrypt Methods.
$newData = $myObj->decrypt();

if ($newData) {
    echo '<br><br>Decoded Data: ' . $newData;
} else {
    echo '<br><br>Sorry! Encryption Fails';
}

/*

$myObj = new Encryption();

$testData = "Abhijeet1";

echo '<br>Original Data: ' . $testData;

$encryptedData = $myObj->encrypt($testData);

echo '<br>encrypted Data: ' . $encryptedData;

$newData = $myObj->decrypt($encryptedData);

echo '<br>New Data: ' . $newData;
*/
