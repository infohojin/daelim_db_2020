<?php
// 게임aptpwl
// 배열로 3개의 무기 준비
$weapon = ["knife","gun","hatchet"];

// 무기 목록 출력
for($i=0; $i<count($weapon); $i++) {
    #echo $weapon[$i];
    // 영어단어 검사 => 한글말로 번역 출력...
    // 조건 제어문.... => 조건값 ==
    /*
    if ($weapon[$i] == "knife") {
        echo "<b>칼</b>로 공격을 합니다.";
    } else if ($weapon[$i] == "gun") {
        echo "<b>총</b>으로 공격을 합니다.";
    } else if ($weapon[$i] == "hatchet") {
        echo "<b>손도끼</b>로 공격을 합니다.";
    } 
    switch($weapon[$i]) {
        case 'knife' :
            echo "<b>칼</b>로 공격을 합니다.";
            break; // switch 끝남
        case 'gun' :
            echo "<b>총</b>으로 공격을 합니다.";
            break; // switch 끝남
            case 'hatchet' :
                echo "<b>손도끼</b>로 공격을 합니다.";
            break; // switch 끝남
    } */

    $func = $weapon[$i];
    $func();
    print "<br>";
}

function knife() {
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>칼</b>로 공격을 합니다.";
}

function gun() {
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>총</b>으로 공격을 합니다.";
}

function hatchet() {
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>손도끼</b>로 공격을 합니다.";
}