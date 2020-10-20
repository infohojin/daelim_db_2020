
<?php

function myname($info)
{
    return $info['first']. $info['last'];
}

$my = myname(['fist'=>"lee", 'last'=>"hojin"]);
$my = myname(['fist'=>"lee", 'last'=>"hojin"]);
echo "<hr>";
echo $my;