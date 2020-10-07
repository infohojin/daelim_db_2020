<?php
echo __FILE__." : ".__LINE__."<br>";

// 외부의 소스코드를 읽어서 결합이 가능합니다.
## include_once "hello.php";  // 소스코드 1번 읽기
## include_once "hello.php";  // 소스코드 2번 읽기(중복 발생)

require_once "hello.php";
require_once "hello.php";  // 2번 읽기 출동

// once => 여러번 포함해도 1번으로 간주

// include VS require
// include => 만일 파일이 없으면 경고만 출력하고 계속 실행
// require => 만일 파일이 없으면 프로그램 중단

echo __FILE__." : ".__LINE__."<br>";
print hello();
