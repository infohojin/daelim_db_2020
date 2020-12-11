<?php
function myname($first,$last,$univ) {
    $n = func_num_args();// 함수에 전달되는 매개변수의 갯수
    echo $n."개의 매개변수가 전달 받았습니다.";
    echo $first . $last;
    $args = func_get_args();
    print_r($args);
    
    $name = $first . $last;
    return $name;
}
$my = myname("배","종범","대림대학교");
echo "<hr>";
echo $my;