<?php

    $daelim ="쌍따옴표";
    $univ='홑따옴표';
    echo $daelim;
    echo $univ;


    // 바깥 따옴표 출력X , 안쪽 따옴표는 출력됨.
    $hi = "hello 'world' ... ";
    echo $hi;
    $hello = 'hello "world" ... ';
    echo $hello;
    
    // 이스케이프문자
    $name = "안녕하세요 \"최예은\"입니다.";
    echo $name;