<?php
// 10/06 오후수업 시작
function myname($info)
{
    return $info['first'].$info['last'];
}

$my = myname(['first'=>"lee", 'last'=>"taejung"]);
echo "<hr>";
echo $my;
