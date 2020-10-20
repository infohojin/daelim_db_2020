<?php
$msg = "abcdef";
echo $msg."<br>";

$i=0;
while($i< strlen($msg))
{
    if($i<=1) continue;

    echo $msg[$i++];
    print "<br>";
    if($i>3)
    {   
    break;
    }
}