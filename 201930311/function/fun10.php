<?php


function myname($info){
    return $info['first'] . $info['last'];
}
$my = myname(['first'=>'park', 'last'=>'SeHoon']);
echo"<HR>";
echo $my;