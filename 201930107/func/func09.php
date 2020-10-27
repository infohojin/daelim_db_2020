<?php

function myName($first, $last, $univ)
{
    // 매개변수 갯수
    $n = func_num_args();
    echo $n."개의 매개변수 전달됨";
    
    echo "<br>";

    // 받은 매개변수 배열형태
    $args = func_get_args();
    print_r($args);
    
    echo "<br>";

    $name = $first . $last;
    
    return $name;
}

echo myName("남궁", "찬", "대림대학교");