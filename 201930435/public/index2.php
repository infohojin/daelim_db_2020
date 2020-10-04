<?php
#echo "여기가 시작이야~~";
$filename = "../";
$filename .= "resource/layout.html";

#echo $filename;
// 함수
$body = file_get_contents($filename); 
// 함수의 값을 대입, 파일을 읽어서 값을 반환

$header = file_get_contents("../resource/header.html");
#echo $header;
$body = str_replace("{{header}}",$header,$body); // 문자열을 찾아서 치환해 주세요.

$footer = file_get_contents("../resource/footer.html");
$body = str_replace("{{footer}}",$footer,$body);

// 함수 선언
function main($filename, $body) // 2개의 값을 받아요
{
  $main = file_get_contents($filename);
  $body = str_replace("{{main}}",$main,$body);

  return $body;
}

// 함수 사용
$body = main("../resource/main.html",$body);

echo $body;
