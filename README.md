# Crypt class
Provides an easy and secure way to encrypt/decrypt data with PHP using the Symmetric Cryptography method, a low cost algorithm that works based on the shared keys conecpt.

    <?php
    require_once 'Crypt/Crypt.php';

    $crypt = new Crypt();
    $crypt->Mode = Crypt::MODE_HEX;
    $crypt->Key  = '!@#$%&*()_+?:';
    $encrypted = $crypt->encrypt('my test');
    echo $crypt->decrypt($encrypted);
    ?>
