<?php

//함수들의 집합체, 꾸러미
//클래스이다.

class message
{
    //인사말 출력 함수
    function hello($name)
    {
        echo $name;
    }

//학번 출력 함수
    function dealim($num)
    {
        echo $num;
    }
}

//선언 -> 호출(2단계)
//선언 -> 생성(인스턴스화) -> 호출(메세지전송) = (3단계)
$obj = new message; // new클래스면 , 클래스 선언의 객체를 생성

//호출(메세지 전송)
$obj->hello("클래스 대림대학교");