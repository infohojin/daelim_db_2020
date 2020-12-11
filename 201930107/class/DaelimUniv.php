<?php

namespace modules\cian;

// 2개의 단어 연결
// word_word => 스네이크 케이스
// wordWord => 카멜 케이스 -> 클래스이름
class DaelimUniv {
    public function hello($name) {
        echo $name;
    }
}

// 생성
// new
$obj = new \modules\cian\DaelimUniv;

// 호출
$obj->hello("daelim");