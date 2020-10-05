<?php

echo __FILE__." : ".__LINE__."<br>";

// 외부의 소스코드를 읽어서 결합이 가능합니다.
## include_once "hello.php"; // 소스코드 1읽기
## include_once "hello.php"; // 2번 읽기 (중복 발생)

require_once "hello.php";
require_once "hello.php"; // 2번읽기 충돌

// _once => 여러번 포함해도 1번으로 간주한다.

// include vs require
// include => 만일 파일 없으면, 경고만 출력하고 계속 실행
// require => 만일 파일이 없으면, 프로그램 중단.
echo __FILE__." : ".__LINE__."<br>";
print hello();