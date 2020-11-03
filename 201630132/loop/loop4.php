<?php
$msg = "abcde";
echo $msg."<br>";

$i = 0;
while ($i < strlen($msg)) {
    echo $msg[$i++];
    print "<br>";

    if($i>3) {
    break;
    }
}