<?php

namespace Crypto\EncryptionsFactory;

use Crypto\Encryptions\Encryption;

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
