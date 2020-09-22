<?php
const PI = 3.14;

if (!defined("PI")) {
    define("PI", 3.141592);
    /*
    * 조건문에서 예약어 const 사용할 수 없다.
    */
    # const PI = 3.14;
}

echo PI;