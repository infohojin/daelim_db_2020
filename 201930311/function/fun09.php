<?php


function myname($f, $l, $univ) : string{
    $n = func_num_args();
    echo $n . "개의 매개변수가 전달 받았습니다";
    

    $args = func_get_args();
    print_r($args);
    $name =$f . $l;
    return $name;

}
$my = myname("박","세훈","대림대학교");
echo"<HR>";
echo $my;