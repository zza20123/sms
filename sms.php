<?php

// กำหนด UID ของท่าน
define('UID', '135198');

// กำหนด API Token ของท่าน
define('TOKEN', '814289b345d75e82192b2abb2b07215c');

$postfields = 'uid=' . UID . '&token=' . TOKEN . '&msisdn=0618354266&message=' . rawurlencode('คิดถึงคุณที่สุด');

$curl = curl_init('https://www.tmtopup.com/sendsms_api.php');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_TIMEOUT, 10);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);
$curl_content = curl_exec($curl);
curl_close($curl);
?>
