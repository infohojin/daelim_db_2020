<?php

function myName($first, $last, $univ) : String // 리턴타입 지정 가능
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

    // $name = 'asdf';
}

$my = myName("남궁", "찬", "대림대학교");
echo "<hr>";
echo $my;

$my = myName("남궁", "찬", "대림대학교");
echo "<hr>";
echo $my;