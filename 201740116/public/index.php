<?php
//echo "여기가 시작이야....";
$filename = "../";
$filename .= "resource/layout.html";

//echo $filename;
//함수
$body = file_get_contents($filename);

$header = file_get_contents("../resource/header.html");
#echo $header;
$body = str_replace("{{header}}",$header,$body);

$footer = file_get_contents("../resource/footer.html");
$body = str_replace("{{footer}}",$footer,$body);

function footer($filename, $body)
{
$footer = file_get_contents($filename);
$body = str_replace("{{main}}",$footer,$body);

return $body;
}

$body = footer("../resource/main.html", $body);

echo $body;