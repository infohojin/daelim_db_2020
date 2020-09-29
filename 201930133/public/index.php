<?php

    echo "여기가 시작";

    // resource 파일로 점프
    // _once : 동일한 파일이 include 되었을 때, 한번만 동장.

    // include vs require
    // 1. include : 파일이 존재하지 않아도, 경고 띄우고 계속 실행.
    // 2. require : 파일이 없으면 프로그램 중단.

    // include_once "resource.php";
    // include_once "resource.php";

    require_once "resource.php";
    // require_once "resource.php";




    // 되돌아와서 프로그램 계속 실행
    $layout = "layout03";
    $layout = html_get_resource("layout03");
    $content = html_get_resource("layout02", "hello.html");

    $layout = str_replace("{(contents)}", $content, $layout);
    echo $layout;
?>