<?php
function myname($first, $last, $univ){
    //함수에 전달되는 매개변수의 갯수
    $n = func_num_args();
    echo $n."개의 변수가 전달 받았습니다.";

    //값도 확인 가능
    $args = func_get_args();
    print_r($args);
    $name = $first.$last;
    return $name;
}
$my = myname("김","서연","대림대학교");
echo "<br>";
echo $my;