<?php
/*
//함수를 호출하여 사용한다
//값을 전달하면 문자열을 전달해준다"파일주소"
$filename = "../";
$filename .="resource/layout.html";

//파일을 읽어서 내용을 결과값으로 변환하는 역할을 한다
$body = file_get_contents($filename);
$header = file_get_contents("../resource/header.html");
$body = str_replace("{{header}}",$header,$body);

//str_replace에 결과값을 대입한다
$footer = file_get_contents("../resource/footer.html");
$body = str_replace("<<푸터>>",$footer,$body);
echo $body;
*/


//once는 동일한 파일이 인클루드 되엇을떄 한번만 나타나게 한다
//인클루드는 파일이 존재하지않아도 경고후 계속실행
//리콰이어는 파일이 없으면 중단

//echo"여기가 시작";

//include_once "resource.php";

//include_once "resource.php";

//require_once "resource.php";
require_once "resource.php";
$layout = "layout03";
$layout =  html_get_resource($layout);
$content = html_get_resource($layout,"hello.html");

$layout = str_replace("{{contents}}", $content, $layout);

echo $layout;