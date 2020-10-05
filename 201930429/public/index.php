<?php
    // 시작이 여기...
    // echo "여기가 시작";

    // resource 파일로 점프
    // 11장 설명
    // include 사용한 만큼 파일을 경합하여 실행
    // once => 동일한 파일이 include 되었을 때, 한번만 동작
    # include_once "resource.php"; // 함수 한번 선언.
    # include_once "resource.php"; // 함수 중복 선언.

    // include vs require
    // include => 파일이 존재하지 않아요, 결고... 계속 진행
    // require => 만일 파일 없으면, 프로그럄 중단.(stop)
    require_once "resource.php";
    
    // 되돌아와서 프로그램 계속 실행

    $layout = "layout03";
    $layout = html_get_resource("layout03");
    $content = html_get_resource("layout02", "hello.html");

    $layout = str_replace("{(contents)}", $content, $layout);
    echo $layout;
?>