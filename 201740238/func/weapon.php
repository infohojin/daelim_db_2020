<?php

$weaphon = ["knife", "gun", "hatchet"];

foreach ($weaphon as $w){
    // //echo $w;
    // switch ($w){

    //     case 'knife':
    //         echo("<b> 칼 </b>로")
    // }

    $w();
    
    print "<br>";
}

function knife()
{
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>칼 </b>로 공격을 합니다";

}

function gun()
{
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>총 </b>로 공격을 합니다";
}

function hatchet()
{
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>손도끼 </b>로 공격을 합니다";
}