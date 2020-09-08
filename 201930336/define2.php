<?php
    // 예약어를 이용하여 함수를 설정
    const PI = 3.14;    // 변하지 말고 너는 3.14
    
    if(defined("PI")) {
        // 만일 PI가 선언되어 있지 않으면
        //새로 정의해 주세요
        //함수를 이용하여 상수를 설정
        define("PI", 3.141592);

        /**
         * 조건문에서 예약어 const 를 사용할 수 없다.
         */
        # const PI = 3.14;
    }
    echo PI;

    // PHP 내부적 제공해 주는 기본 상수
    // __***__