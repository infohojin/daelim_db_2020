<?php
// echo "대림대학교";

// 클래스 선언
// 클래스 = 함수 + 변수
class message
{
    // 프로퍼티
    $name;

    // 선언
    function hello($name)  
    {
        echo $name;
    }

    // 메소드
    function hi($name)  
    {
        echo $name;
    }
}

// 함수 >>> 선언 -> 호출
// 클래스 >>> 선언 -> 생성 -> 호출

// 생성 -> 인스턴스화
$obj = new message;
// 호출
$obj->hello("대림대학교!!!");

/*
$name = "univ";  
hello("대림대학교");
hello("daelim");
*/ 