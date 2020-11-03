<?php
// 10/06 오후수업 시작
function myname($first, $last, $univ) : string
{
    
    $n = func_num_args();
    echo $n."개의 매개변수가 전달받았습니다";
    
    $args = func_get_args();//함수에서 받아오는 값을 배열로나타내는 코드
    print_r($args);
    $name = $first.$last;
    return $name;
}

$my = myname("이","태정","대림대학교");
echo "<hr>";
echo $my;

$my = myname("대림대학교","태정","이");
echo "<hr>";
echo $my;