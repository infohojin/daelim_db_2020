<?php
// 게임 메시지
$weapon = ["knife", "gun", "hatchet"];
for($i=0; $i<count($weapon); $i++) {
    // echo $weapon[$i];
    // 영어단어 검사 => 한글말로 번역 출력...
    // 조건 제어문 ....=> 조건값 ==
    /*
    if($weapon[$i] == "knife") {
        echo "칼로 공격을 합니다.";
    } else if($weapon[$i] == "gun") {
        echo "총으로 공격합니다.";
    } else if($weapon[$i] == "hatchet") {
        echo "손도끼로 공격합니다.";
    }
    */

    // switch 문은 if문보다 조건 분리가 간단하고 빠르다
    // 단점은 == 만 검사할 수 있다.
    /*
    switch($weapon[$i]) {
        case 'knife':
            echo "<b>칼</b>로 공격합니다.";
        break;  // switch 끝남
        case 'gun':
            echo "<b>총</b>으로 공격합니다.";
        break;  // switch 끝남
        case 'hatchet':
            echo "<b>손도끼</b>로 공격합니다.";
        break;  // switch 끝남
    }
    */

    $func = $weapon[$i];    // 문자열 복사
    $func();    // 문자열과 동일한 함수를 호출(익명함수)
    print "<br>";
}

// 상태패턴 호출방식
function knife() {
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>칼</b>로 공격합니다.";
}
function gun() {
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>총</b>으로 공격합니다.";
}
function hatchet() {
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>손도끼</b>로 공격합니다.";
}