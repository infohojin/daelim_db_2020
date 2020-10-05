<?php

# 함수의 선언은 호출 전/후 모두 위치 가능

// hello("kjh");  // error

if (function_exists("hello")) {
    echo "hello 함수가 존재하네요.<br>";
} else {
    // 조건 제어문의 코드블럭 안에서도 함수를 선언할 수 있음
    function hello($name)
    {
        echo "안녕하세요 <br>";
        print "대림대학교의 ";
        print $name . " 입니다.<br>";
        return true;
    }
}

hello("kjh");