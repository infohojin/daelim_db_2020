<?php


function myname($f, $l){
    $n = func_num_args();
    echo $n . "개의 매개변수가 전달 받았습니다";
    

    $args = func_get_args();
    print_r($args);
    $name =$f + $l;
    return $name;

}
myname("박","세훈","대림대학교");