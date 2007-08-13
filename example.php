<?php
require_once 'Crypt.class.php';

$Crypt = new Crypt;

/* CRYPT_MODE_BINARY */
$Crypt->Mode = CRYPT_MODE_BINARY; 
$Crypt->Key  = 'MY_FIRST_CRYPT_KEY';
echo $Crypt->Encrypt('My 1st data') . "<br />\n";

/* CRYPT_MODE_BASE64 */
$Crypt->Mode = CRYPT_MODE_BASE64;
$Crypt->Key  = 'MY_SECOND_CRYPT_KEY';
echo $Crypt->Encrypt('My 2nd data') . "<br />\n";

/* CRYPT_MODE_HEXADECIMAL */
$Crypt->Mode = CRYPT_MODE_HEXADECIMAL;
$Crypt->Key  = 'MY_THIRD_CRYPT_KEY';
echo $Crypt->Encrypt('My 3rd data') . "<br />\n";

/* CRYPT_HASH_MD5 */
$Crypt->Hash = CRYPT_HASH_MD5;
$Crypt->Hash('My 4th data')            . "<br />\n";
echo $Crypt->Hash('My 4th data', true) . "<br />\n";

/* CRYPT_HASH_SHA1 */
$Crypt->Hash = CRYPT_HASH_SHA1;
$Crypt->Hash('My 5th data')            . "<br />\n";
echo $Crypt->Hash('My 5th data', true) . "<br />\n";

/* Conversion the object to string */
echo $Crypt;
?>
