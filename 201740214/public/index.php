<?php
// 시작이 ㅇㄱ
echo "여기가 시작..";
//resource file로 jump

// include_once  "resource.php";

// include_once "resource.php";
    require_once "resource.php";

// include use한 만큼 file을 concat하여 execute

// 되돌와서 프로그램 계속 실행
$layout = "layout03";
$layout =  html_get_resource($layout);
$content = html_get_resource($layout,"hello.html");

$layout = str_replace("{{contents}}", $content,$layout);
echo $layout;