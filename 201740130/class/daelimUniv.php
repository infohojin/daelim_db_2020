<?php

namespace modules\chan;

// 2개의 단어 연결
// word_word = snake case
// wordWord = camel case
// 클래스 => 카멜케이스
class daelimUniv{
    public function hello($name) {
        echo $name;
    }
}

//생성
// new keyword
$obj = new \modules\chan\daelimUniv;

// 호출
$obj -> hello("daelim");