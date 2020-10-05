<?php
//함수가 if문 안에 들어있기 때문에 if문 밖으로 나와보리면 함수설정이 되지 않는다.
//hello("홍길동");


if (function_exists("hello")) {
   echo"hello 함수가 존재하네요";
    //여기에 코드를 실행해 주세요.
 }else{
     echo"hello 함수가 뭐에요?<br>";
     //없다면 여기의 코드를 실행해주세요.
 

//함수의 이름은 중복될 수 없다.
//조건 제어문의 코드블럭 안에서도 함수를 선언 할 수 있습니다.


function hello($name)
{
    //$name 이라는 변수가 함수내에 생성됨
    echo "안녕하세요<br>";
    print "대림대학교의";
    print $name . " 입니다.<br>";
    return true;
}
 }

 hello("홍길동");
