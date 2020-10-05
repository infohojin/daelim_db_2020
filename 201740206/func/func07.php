<?php

if (function_exists("hello")) {
    echo "hello 함수가 존재하네요.<br>";
} else {
    function hello($name="초기값")  // 초기값 지정가능
    {
        echo "안녕하세요 <br>";
        print "대림대학교의 ";
        print $name . " 입니다.<br>";
        return true;
    }
}

hello();  // error, 초기값 넣어주면 에러 안남
hello("kjh");
hello("kjh");
