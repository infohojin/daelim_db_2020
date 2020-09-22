<?php
//예약어로 상수 설정
const PI = 3.14;

if(!defined("PI")) {
    define("PI",3.141592);

}
echo PI;