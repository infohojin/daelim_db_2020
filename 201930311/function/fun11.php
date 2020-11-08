<?php

function daelim(){
    print __FUNCTION__ . "호출합니다. <BR>";
    echo "대림대학교";
}

function myname(){
    print __FUNCTION__ . "호출합니다. <BR>";
    echo "박세훈 입니다";
}

$caller = 'myname';
$caller();

$func = function(){
    echo "좋은하루";
};

$func();