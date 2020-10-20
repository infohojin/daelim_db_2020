<?php
$weapon = ['knife', 'gun', 'hatchet'];

foreach ($weapon as $k => $v) {
    // switch ($v) {
    //     case 'knife':
    //         echo "칼로 공격";
    //         break;
    //     case 'gun':
    //         echo "총으로 공격";
    //         break;
    //     case 'hatchet':
    //         echo "손도끼로 공격";
    //         break;
    // }
    $v();
    echo "<br>";
}

function knife()
{
    echo __FUNCTION__ . "호출됨 : ";
    echo "<b>칼</b>로 공격";
}

function gun()
{
    echo __FUNCTION__ . "호출됨 : ";
    echo "<b>총</b>으로 공격";
}

function hatchet()
{
    echo __FUNCTION__ . "호출됨 : ";
    echo "<b>손도끼</b>로 공격";
}