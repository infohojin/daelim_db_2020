<?php
//예약어를 이용하여 함수를 설정
const PI = 3.14;

if (!define("PI")) { // 만일 PI가 선언되어 있지 않으면 새로 정의
    define("PI", 3.141592);
} // 조건문에서 예약어 const 사용 불가

echo PI;