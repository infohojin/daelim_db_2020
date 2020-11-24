<?php

// 함수들의 집합체 꾸러미 = class

class msg {
    // 변수 : property 프로퍼티
    // 인삿말 출력
    public function hello($name) {
        echo $name;
    }

    // 학번 출력
    // 메서드(method) : 클래스 안에 있는 함수를 의미
    private function daelim($num) {
        echo $num;
    }
}

// 함수 : 선언 -> 호출 (2단계)
// 클래스 : 선언 -> 생성/인스턴스화 -> 호출/메세지전송 (3단계)

$obj = new msg; // new 클래스명, 클래스 선언의 개체를 생성

// 호출(메세지 전송)
$obj->hello("클래스 대림대학교");