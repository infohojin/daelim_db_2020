<?php

// 파일명 = 클래스 이름

// 페키지
namespace modules\jin; 

// 클래스 이름짓기(2개의 단어가 연결)
// 단어_단어 (스네이크 케이스) => X 
// nameName (카멜케이스) => O
class daelimUniv { // 클래스 선언
    public function hello($name) {
        echo $name;
    }
}

// 생성
$obj = new \modules\jin\daelimUniv;
$obj -> hello("진예도");