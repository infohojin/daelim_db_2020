<?php

$filename = "../";
$filename .= "resource/layout.html";//복합연산자
// . 은 문자열을 더하는 연산자
// = 대입

$body = file_get_contents($filename);
$header = file_get_contents("../resource/header.html");
$footer = file_get_contents("../resource/footer.html");
//스티링을 치한
$body = str_replace("{{header}}",$header,$body);
$body = str_replace("{{footer}}",$footer,$body);
echo $body;