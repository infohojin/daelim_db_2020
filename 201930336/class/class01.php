<?php

$name = "대림대학교";

// 위와 아래의 $name -> 이름은 같지만 서로 다른 메모리 영역
// 스코프 : 변수의 유효범위
// 선언
function hello($name) {
    echo $name;
}

// 함수가 중복 선언을 할 수 없기 때문에 아래처럼 편법을 쓴다...
if(function_exists("hello")){
    function hello($name) {
        echo $name;
    }
}

// 호출
hello("대림이");
hello("대숙이");

?>