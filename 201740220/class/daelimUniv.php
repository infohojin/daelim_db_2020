<?php

namespace modules\hj;

// 2개의 단어 연결
// 단어_단어 => 스네이크 케이스
// 클래스 => 카멜케이스
class daelimUniv
{
    public function hello($name)
    {
        echo $name;
    }
}

// 생성
// new
$obj = new \modules\hj\daelimUniv;

//호출
// -> 클래스에 안에 있는 메서드 호출할때 사용.
// 웹브라우저 주소창에서 대소문자 구분x
$obj->hello("daelim");