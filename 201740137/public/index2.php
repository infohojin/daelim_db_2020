<?php
//echo "여기가 시작이얏~~~~~~~~~~~~~~";

$filename = "../";
$filename .= "resource/layout.html";

echo $fimename;

$body = file_get_contents($filename);

$header = file_get_contents("../resource/header.html");
//echo $header;
$body = str_replace("{{header}}",$header,$body);

$footer = file_get_contents("../resource/footer.html");
$body = str_replace("{{footer}}",$footer,$body);


function main($filename, $body)
{
    $main = file_get_contents($filename);
    $body = str_replace("{{main}}",$main,$body);

    return $body;
}
$body = main("../resource/main.html",$body);

  

echo $body;