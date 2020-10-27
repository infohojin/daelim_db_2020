<?php
$msg = "abcdefg";

for($i=0;$i<strlen($msg);$i++){
    //echo $msg[$i];
    $str = $msg[$i];
    echo ++$str;
    print "<br>";
}