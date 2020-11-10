<?php

// game message
$weapon = ["knife","gun", "axe"];

for($i=0; $i<count($weapon); $i++) {
    //if($weapon[$i] == "knife") {
    //    echo "<b>칼</b>로 공격을 합니다.";
    //} else if ($weapon[$i] == "gun") {
    //    echo "<b>총</b>으로 공격을 합니다.";
    //} else if ($weapon[$i] == "axe") {
    //    echo "<b>도끼</b>로 공격을 합니다.";
        /*switch($weapon[$i]) {
            case 'knife':
                echo "<b>칼</b>로 공격을 합니다.";
            break;
            case 'gun':
            echo "<b>총</b>으로 공격을 합니다.";
            break;
            case 'axe':
            echo "<b>도끼</b>로 공격을 합니다.";
        }
        */
        $func = $waepon[$i];
        $func();
    print "<br>";
}





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
    echo "<b>도끼</b>로 공격을 합니다.";
}