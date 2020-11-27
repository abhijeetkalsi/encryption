<?php

// need to require once the compser autoload.php
require_once __DIR__ . '/vendor/autoload.php';

use Crypto\EncryptionsFactory\EncryptionFactory as EncryptFact;

$testData = "Abhijeet.Kalsi";

// To have the factory create the Encryption object.
$CipherObj = EncryptFact::create($testData);

echo '<h1>Output</h1>';
echo '<br>Original Plain Text: ' . $testData;

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
