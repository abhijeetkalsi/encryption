<?php
namespace myclass;

include_once('Encryption.php');

use Encryption;

$myObj = new Encryption();

$testData = "Abhijeet1";

echo '<br>Original Data: ' . $testData;

$encryptedData = $myObj->encrypt($testData);

echo '<br>encrypted Data: ' . $encryptedData;

$newData = $myObj->decrypt($encryptedData);

echo '<br>New Data: ' . $newData;
