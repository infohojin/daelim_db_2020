<?php

    // 함수들의 집합체, 꾸러미
    // 클래스
    class message {

        // 변수
        // 프로퍼티
        protected $name;

        // 인사말출력 함수
        function hello($name) {
            echo $name;
        }

        // 학번 출력 함수
        // 메서드(method)
        private function daelim($num) {
            echo $num;
        }
    }
    
    // 선언->호출(2단계)
    // 선언->생성(인스턴스화)->호출(메세지전송) = (3단계)
    $obj = new message;

    // 호출(메세지전송)
    $obj->hello("클래스 대림대학교");

    // ->

?>