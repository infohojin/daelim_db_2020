<?php

function myName($info) : String // 리턴타입 지정 가능
{
    return $info['first'] . $info['last'] . "<br>" . $info['univ'];
}

$my = myName(['first'=>"남궁", 'last'=>"찬", 'univ'=>"대림대학교"]);
echo $my;
echo "<hr>";