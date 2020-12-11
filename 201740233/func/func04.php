<?php

echo __FILE__." : ".__LINE__."<br>";

# include_once "hellp.php"; // 소스코드 1읽기
# include_once "hellp.php"; // 소스코드 2번째 읽기 (중복 발생)

require_once "hello.php";
require_once "hello.php";

// _once => 여러번 포함해도 1번으로 인식


// include 파일 없으면 경고만 출력후 계속 실행
// require 파일 없으면 프로그램 중단
echo __FILE__." : ".__LINE__."<br>";
print hello();