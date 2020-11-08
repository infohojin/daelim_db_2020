<?php

//인사말 출력 함수;
//클래스
class message
{
    //변수
    //프로퍼티
    protected $name;
// 인사말 출력함수
public function hello($name)
{
    echo $name;
}

//학번 출력
//메서드
private function daelim($num)
{
    echo $num;
}
}


//선언 > 호출(2단계)
//선언 > 생성(인스턴스화) > 호출(메세지전송) = (3단계)
$obj = new message; // new 클래스명 ,클래스 선언의 객체들 생성
//호출(메세지 전송)
$obj->hello("클래스 대림대학교");
