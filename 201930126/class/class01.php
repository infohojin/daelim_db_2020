<?php

class msg
{
    //변수
    //프로퍼티
    protected $name;

public function hello($name)
{
    echo $name;
}

private function daelim($num)
{
    echo $num;
}
}

//선언-> 생성-> 호출
$obj = new msg;//new클래스만 클래스 선언 객체를 사용
//호출 (메시지 호출)
$obj->hello("클래스 대림대학교");

//->