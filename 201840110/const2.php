<?php
const PI = 3.14; // 볂지 않는 값.
// PI 는 3.14만 사용하는 고정값, 상수니까




if (defined("PI")) {
// 응 있어
} else {

}
define("PI", 3.141592);
}


echo PI;
