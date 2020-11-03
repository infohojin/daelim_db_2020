<?php

//namespace라는 걸 이용해 가상의 이름을 만든다.

namespace modules\jiny;

// 2개의 단어 연결
// 단어_단어 => 스네이크 케이스
// 클래스는 카멜케이스
class daelimuniv{

    public function hello($name){

        echo $name;
    }
    
}

// 생성
// new 키워드이용

$obj=new \modules\jiny\daelimuniv;

//호출

$obj->hello("daelim");