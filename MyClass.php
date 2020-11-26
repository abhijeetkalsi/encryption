<?php
namespace myclass;

include_once('Encryption.php');

use Encryption\Encryption;

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

$testData = "Abhijeet.Kalsi";

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
    echo '<br><br>Sorry! Decryption Fails';
}
