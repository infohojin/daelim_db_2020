<?php

include "resource.php";
include "resource.php";

$theme = "layout04";

$color1="#0277bd"; // 초기값1
$color2= "#512da8"; // 초기값2

$vars = ['header_color'=>$color2]; //연상배열

$filename = "../resource/layout02/layout.html";
$body = resource($filename, $vars);
// $body = html_get_contents($theme);

$content = html_get_contents($theme,"hello.html");

$body = str_replace("{{contents}}", $content, $body);
echo $body;