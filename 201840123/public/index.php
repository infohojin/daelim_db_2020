<?php

include  "resource.php";
include  "resource.php";

$theme = "layout04";
//$body = html_get_content($theme);

$color1="#0277bd";//초기값1
$color2="#512da8";//초기값2

$vars = ['header_color'=>$color2];//연상배열

$filename = "../resource/layout02/layout.html";
$body = resource($filename);

$content = gtml_get_contents($theme, "hello.html");

// 문자열 치환
$body = str_replace("{{content}}",$content, $body);


echo $body;