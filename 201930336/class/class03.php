<?php

namespace modules\sooyeon;

// 2개의 단어 연결
// 단어_단어 : 스네이크 케이스
// 클래스 => 카멜 케이스
class daelimUniv {
    public function hello($name) {
        echo $name;
    }
}

// 생성
// new 키워드를 이용해 생성
$obj = new \modules\sooyeon\daelimUniv;

// 호출
$obj->hello("daelim");