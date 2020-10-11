<?php

function myname($info)
{
    return $info['first'] . $info['last'];
}

$my = myname(['first'=>"kim", 'last'=>"wooseop"]);
echo "<hr>";
echo $my;
