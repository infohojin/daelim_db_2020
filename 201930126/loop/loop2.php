<?php
$msg="abcdefghijk";
//echo $msg;
for($i=0; $i<strlen($msg); $i++)
{
    $str = $msg[$i];
    echo ++$str;
    print "<br>";
}