<?php
//예약어, 함수
const PI = 3.14; // 상수는 변하지 않는값

if(defined("PI")) {
} else {
    define("PI",3.141592);
}

echo PI;