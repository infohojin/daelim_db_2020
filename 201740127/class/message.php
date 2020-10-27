<?php

//클래스 = 함수 + 변수

class daelimUniv {
    //프로퍼티
    private $name;

    //선언
    public function hello($name) {
        echo $name;
    }

    //메소드
    protected function hi($name) {
        echo $name;
    }
}

//함수 >>> 선언 -> 호출
//클래스 >> 선언 -> 생성 -> 호출
//생성 => 인스턴스 화
$obj = new \daelim\mobile\daelimUniv;

//호출
$obj->hello("대림대학교");