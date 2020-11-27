<?php 

declare(strict_types=1);
include_once('Encryption.php');

use PHPUnit\Framework\TestCase;

use Encryption\Encryption;


final class EncryptUnitTest extends TestCase
{
    public function testEncrypt(): void
    {
        $stack = [];
      
        $testData = "Abhijeet.Kalsi";

        $CipherObj = new Encryption($testData);
        
        echo '\n Original Plain Text 1: ' . $testData;
        
        // Calls to Encrypt Methods.
        $encryptedData = $CipherObj->encrypt();
        // Calls to Encrypt Methods.
        $newData = $CipherObj->decrypt();
        
        // Assertion Test to match word.
        $this->assertSame($testData, $newData);

/**
 *  Test 2
 */

        $testData = "SRIJAN";

        $CipherObj = new Encryption($testData);
        
        echo '\nOriginal Plain Text 2: ' . $testData;
        
        // Calls to Encrypt Methods.
        $encryptedData = $CipherObj->encrypt();
        // Calls to Encrypt Methods.
        $newData = $CipherObj->decrypt();
        
        // Assertion Test to match word.
        $this->assertSame($testData, $newData);



    }
}