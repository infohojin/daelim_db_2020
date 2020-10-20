<?php
// 인자값 () <= 소괄호 안에 선ㄴ언
// 반환 받는 타입 함수명 뒤에 선언

function myname($first, $last, $univ) : string {
    $n = func_num_args();
    echo $n."개의 매개변수가 전달 받았습니다.";

    $args = func_get_args();
    print_r($args);

    $name = $first.$last;
    return $name;  // 문자열
    // 함수의 동작이 종료됨
}
$my = myname("김", "주호", "대림대학교");
echo "<hr>";
echo $my;