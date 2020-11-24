<?php

// 함수들의 집합체, 꾸러미
// 클래스
class Message {
    // 변수
    // 프로퍼티property
    protected $name = 0;

    // 인사말출력 함수
    public function hello($name) {
        echo $name;
        
    }
    
    // 학번출력 함수
    // 메서드(method): 클래스 안에 있는 함수
    private function daelim($num) {
        echo $num;
    
    }
    
}

// 함수: 선언 -> 호출 = (2단계)
// 클래스: 선언 -> 생성(인스턴스화) -> 호출(메시지전송) = (3단계)
$obj = new Message; // new 클래스명: 클래스 선언의 객체를 생성

//호출(메시지전송)
$obj->hello("대림대학교");

// ->
// .