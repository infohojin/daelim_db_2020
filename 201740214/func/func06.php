<?php


if(function_exists("hello")){
    echo "hello 함수가 존재하네요";
}else {
    echo "hello 함수가 뭐에여? 첨 들었어열";
}

function hello($name="1234546")
{ 
    echo "안녕하세요.<br>";
    print "대림대학교의";
    print $name . " 입니다<br>";
    return true;
}


hello();
hello("홍길동");
hello("홍길동");
