<?php

hello("이태정");
    if(function_exists("hello"))
    {
        echo"hello 함수가 존재한다<br>";
    }else
    {
        echo"hello 함수가 없다<br>";
    function hello($name)
    {
    echo "안녕하세요.<br>";
    print "대림대학교의 ";
    print $name . "입니다<br>";
    return true;
    }
    }