<?php

namespace EncryptUnitTest;

use PHPUnit\Framework\TestCase;

use Crypto\EncryptionsFactory\EncryptionFactory as EncryptFact;

/**
 * Unit Test Class.
 */
final class EncryptUnitTest extends TestCase
{
    /**
     * Assert Test to validate Plain text with decrypted Data.
     */
    public function testEncrypt(): void
    {
        // Plain test data to encode.
        $testData = "Abhijeet.Kalsi";

        // Have the factory create the Encryption object
        $CipherObj = EncryptFact::create($testData);
        
        echo 'Original Plain Text 1: ' . $testData;
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
        // Have the factory create the Encryption object
        $CipherObj = EncryptFact::create($testData);
      
        echo '\nOriginal Plain Text 2: ' . $testData;
        
        // Calls to Encrypt Methods.
        $encryptedData = $CipherObj->encrypt();
        // Calls to Encrypt Methods.
        $newData = $CipherObj->decrypt();
        
        // Assertion Test to match word.
        $this->assertSame($testData, $newData);
    }
}
