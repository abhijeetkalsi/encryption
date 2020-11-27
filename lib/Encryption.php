<?php

namespace Encryption;

require_once('lib\Cryptography.php');

use Cryptography\Cryptography;

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
