<?php

include "resource.php";
include "resource.php";

$theme = "layout04";
$color1 = "#673ab7";
$color2 = " #5e35b1";
$vars = ['header_color' => $color2];
$filename = "../resource/layout02/layout.html";
$body = resource($filename,$vars);

$content = html_get_contents($theme, "hello.html");

$body = str_replace("{{contents}}",$content, $body);
echo $body;