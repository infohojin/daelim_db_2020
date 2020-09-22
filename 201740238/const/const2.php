<?php
//const PI = 3.14; // 변하지 않는 값
//3.14만 사용하는 고정값 상수

if(defined("PI")) {
// 있다
} else {
//없다

define("PI", 3.141592);
}
echo PI;

