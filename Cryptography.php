<?php

namespace Cryptography;

/**
 * Provides cryptographic services,
 * including secure encoding and decoding of data, as well.
 */
interface Cryptography
{
     /**
     * This will Encrypt the system in some special way
     * @param void
     * @return String encrypted data.
     */
    public function encrypt();

    /**
     * This will Decrypt the system in some special way
     * @param void
     * @return String decrypted data.
     */
    public function decrypt();
}

?>