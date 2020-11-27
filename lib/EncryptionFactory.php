<?php

namespace EncryptionFactory;

require_once('Encryption.php');

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
