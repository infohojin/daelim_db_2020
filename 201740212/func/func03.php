<?php
# 인사말1
hello("박상준");

# 인사말2
hello("박상준");


//함수 선언
//입력 소괄호()과 출력 return
//입력(), 여러개의 값이 전달
//출력은 return
function hello($name)
{

    //$name 변수 함수내에, 생성
    echo "안녕하세요.<br>";
    print "대림대학교의 ";
    print $name . " 입니다.<br>";
    return true;
}

