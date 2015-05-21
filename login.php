<?php
header("Content-type: text/html; charset=utf-8");
require_once 'PHPGangsta/GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();

$secret = 'MSYV7OFCZEY7ESXI';//$ga->createSecret();
echo "Secret is: ".$secret."\n\n<br/>";

$qrCodeUrl = $ga->getQRCodeGoogleUrl('Blog', $secret);
//echo "Google Charts URL for the QR-Code: ".$qrCodeUrl."\n\n<br/>";


$oneCode = $_GET['code'];//$ga->getCode($secret);


echo "Checking Code '".$ga->getCode($secret)."' and Secret '$secret':\n<br/>";

//$checkResult = $ga->verifyCode($secret, $oneCode, 2);    // 2 = 2*30sec clock tolerance
if ($oneCode == $ga->getCode($secret)) {
    echo '登录成功';
} else {
    echo '登录失败';
}