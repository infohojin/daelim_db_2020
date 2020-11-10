<?php
// echo '시작';

// include "resource.php";

// _once -> 동일한 파일이 include 됐을때, 한번만 동작
// include_once "resource.php";

// include vs require
// include : 파일 없을 시 경고 후 계속 실행
// require : 파일 없을 시 프로그램 중단
// require_once "resource.php";
require_once "resource.php";

$layout = "layout03";
$layout = html_get_resource($layout);
$content = html_get_resource("layout02", "hello.html");

$layout = str_replace("{{contents}}", $content, $layout);
// echo $layout;