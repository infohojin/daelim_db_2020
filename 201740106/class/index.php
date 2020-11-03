<?php

$name="대림대학교1";
 
//함수선언
function hello($name){

    echo  $name;

    
} 

//함수가 중복 선언 할 수 없기에 밑에와같은 명령어를 쓴다

if (!function_exists("hello")){

    function hello($name){

        echo  $name;
    
        
    } 
    

    
} 

//함수호출

hello("대림이");
hello("대숙이");

