<?php
// 게임메시지
// 배열로 3개의 무기 준비
$weapon = ["knife","gun","hatchet"];

//무기 목록 출력
for($i=0; $i<count($weapon);$i++){
    # echo $wapon[$i];
    // 영어단어 검사 => 한글로 번역 출력
    // 조건 제어문 .. => 조건값 ==
    /*
    if( $weapon[$i] == "knife") {
        echo "칼로 공격을 합니다.";
    } else if ($weapon[$i] == "gun"){
        echo "총으로 공격을 합니다.";
    } else  if ($weapon[$i] == "hatchet"){
        echo "손도끼로 공격을 합니다.";
    }
    */
    
    //스위치문은 if보다 조건 분기가 간단하고 빠르다
    // 단점은 == 조건의 경우만 검사할 수 있다
    /*
    switch($weapon[$i]) {
        case 'knife':
            echo "<b>칼</b>로 공격을 합니다.";
            break; //switch 끝남
        case 'gun':
            echo "<b>총</b>으로 공격을 합니다.";
            break; //switch 끝남
        case 'hatchet':
            echo "<b>손도끼</b>로 공격을 합니다.";
            break; //switch 끝남
    }
    */
    $func = $weapon[$i];
    $func();
    print "<br>";
}

function knife(){
    echo __FUNCTION__."를 호출합니다 ";
    echo "<b>칼</b>로 공격을 합니다.";
}
function gun(){
    echo __FUNCTION__."를 호출합니다 ";
    echo "<b>총</b>으로 공격을 합니다.";
}
function hatchet(){
    echo __FUNCTION__."를 호출합니다 ";
    echo "<b>손도끼</b>로 공격을 합니다.";
}