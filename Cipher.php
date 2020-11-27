<?php
namespace Cipher;

include_once('lib/EncryptionFactory.php');

use EncryptionFactory\EncryptionFactory;

$testData = "Abhijeet.Kalsi";

// have the factory create the Encryption object
$CipherObj = EncryptionFactory::create($testData);

echo '<br><br>Original Plain Text: ' . $testData;

// Calls to Encrypt Methods.
$encryptedData = $CipherObj->encrypt();

if ($encryptedData) {
    echo '<br><br> Encrypted Data: ' . $encryptedData;
} else {
    echo '<br><br>Sorry! Encryption Fails';
}
// Calls to Encrypt Methods.
$newData = $CipherObj->decrypt();

if ($newData) {
    echo '<br><br>Decoded Data: ' . $newData;
} else {
    echo '<br><br>Sorry! Decryption Fails';
}
