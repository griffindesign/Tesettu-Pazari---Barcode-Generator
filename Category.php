<?php
$url = "http://tesetturpazari.com/rest1/category/getCategories";

$fields = array( 'token' => $TokenS);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$Cate = json_decode($response, true);
 ?>
