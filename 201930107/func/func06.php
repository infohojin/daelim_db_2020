<?php
if (function_exists("hello")) {
    // echo "hello함수 존재";
} else {
    // echo "hello함수 없음";
    
    // 조건 제어문 코드블럭 안에서도 함수 선언 가능
    function hello($name)
    {
        echo '안녕하세요.<br>';
        print '대림대학교의 ';
        print "$name 입니다.<br>";
        return true;
    }
}

hello("홍길동");