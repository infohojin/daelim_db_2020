<?php

    //함수 호출해서 사용
    //값을 전달해주면, 문자열을 전달. 파일주소.
    $filename = "../";
    // . 문자열을 더하는 연산자
    // = 대입
    $filename .= "resource/layout.html";
    $body = file_get_contents($filename);
    $header = file_get_contents("../resource/header.html");
    $footer = file_get_contents("../resource/footer.html");

    // body에 str_replace의 값을 대입
    // 치환
    $body = str_replace("{{header}}", $header, $body);
    $body = str_replace("{footer}", $footer, $body);

    echo $body;