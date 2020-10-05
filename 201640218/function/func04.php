<?php
echo __FILE__." : ".__LINE__."<br>";
// include : 외부의 소스 코드 읽어서 처리함
include_once "hello.php"; // 소스코드 읽기 1
include_once "hello.php"; //2번 읽기( 중복 발생 )
// require : include와 동일한 기능
// require "hello.php";

//_once => 여러번 포함해도 1번으로 간주

// include vs require
// include => 파일이 없으면, 경고만 출력 계속 실행
// require => 만일 파일이 없으면, 프로그램 중단
echo __FILE__." : ".__LINE__."<br>";
print hello();