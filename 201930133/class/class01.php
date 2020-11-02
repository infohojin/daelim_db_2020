<?php
    // class : 함수들의 집합체 꾸러미 .. (?)
    // 함수 말고 변수도 넣을 수 있음
    // 가시성? (visivility) : private, protected, public . . .
    class className{
        // class 안의 변수 = property(프로퍼티)
        protected $name;
        // class 안의 함수 = method(메서드)
        function hello($name){
            // 인사말 출력
            echo $name;
        }
        function daelim($num){
            // 학번 출력
            echo $num;
        }
    }

    // 1선언 2생성 3호출
    $obj = new className;
    $obj->hello("ㄷㄹㄷㅎㄱ");