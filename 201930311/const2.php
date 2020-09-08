<?php
const PI = 3.14;//변하지 않는값.

if(defined("PI")){
    //있다
}else{
    define("PI",3.141592);
}

echo PI;