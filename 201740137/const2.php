<?php
//const PI = 3.14;

if(define("PI")){

}else{
    define("PI", 3.141592);
}
// const PI = 3.141592; 
//상수는 하나의 값만 가질 수 있다.
echo PI;