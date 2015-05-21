<?php

require_once '../PHPGangsta/GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();

$secret = 'MSYV7OFCZEY7ESXI';//$ga->createSecret();
echo "Secret is: ".$secret."\n\n<br/>";

$qrCodeUrl = $ga->getQRCodeGoogleUrl('Blog', $secret);
echo "Google Charts URL for the QR-Code: ".$qrCodeUrl."\n\n<br/>";


$oneCode = $ga->getCode($secret);
echo "Checking Code '$oneCode' and Secret '$secret':\n<br/>";

$checkResult = $ga->verifyCode($secret, $oneCode, 2);    // 2 = 2*30sec clock tolerance
if ($checkResult) {
    echo 'OK';
} else {
    echo 'FAILED';
}