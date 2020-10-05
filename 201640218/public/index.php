<?php

include "resource.php";

$theme ="layout02";
//$body = html_get_contents($theme);

$color1="0277bd";
$color2="#512da8";

$vars =['header_color'=> $color2];

$filename = "../resource/layout02/layout.html";
$body = resource($filename,$vars);
$content = html_get_contents($theme,"hello.html");
//문자열 치환
$body = str_replace("{{contents}}",$content,$body);
echo $body;