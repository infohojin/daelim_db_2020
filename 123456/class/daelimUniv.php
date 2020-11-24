<?php

namespace modules\jiny;

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
$obj = new \modules\jiny\daelimUniv;

// 호출
$obj->hello("daelim");

