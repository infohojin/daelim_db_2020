<?php
//게임
//배열로 3개의 무기 준비
$weapon = ["knife","gun","axe"];

//무기 목록 출력

for($i=0; $i<count($weapon); $i++){
    # echo $weapon[$i];
    //영어단어 검사 => 한글말로 번역 출력
    //조건 제어문 => 조건값이 ==
    /*
    if($weapon[$i] == "knife"){
        echo "<b>칼</b>로 공격을 합니다.";
    } else if ($weapon[$i] == "gun"){
        echo "<b>총</b>으로 공격을 합니다.";
    } else if ($weapon[$i] == "axe"){
        echo "<b>손도끼</b>로 공격을 합니다.";
    } 
    */
    //switch 문은 if  보다 조건 분기가 간단하고 빠르다
    //단점 == 만 검사할 수 있다.
    /*
    switch($weapon[$i]){
        case 'knife':
            echo "<b>칼</b>로 공격을 합니다.";
        break;
        case 'gun':
            echo "<b>총</b>으로 공격을 합니다.";
        break;
        case 'axe':
            echo "<b>손도끼</b>로 공격을 합니다.";
        break;
    }
    */

    $func = $weapon[$i]; //문자열 복사
    $func(); //문자열과 동일한 함수를 표출(익명함수)
    print "<br>";
}

//상대패턴 호출방식

function knife(){
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>칼</b>로 공격을 합니다.";
}
function gun(){
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>총</b>으로 공격을 합니다.";
}
function axe(){
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>손도끼</b>로 공격을 합니다.";
}