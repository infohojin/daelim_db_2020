<?php

function daelim($num)
{
    $name = "대림";
    echo $name . "대학교" . $num;
    print "<hr>";
}

$name = "daelim";
for ($i=0; $i<5; $i++){
daelim($i);
}

/*
echo "대림대학교";
print "<hr>";

echo "대림대학교";
print "<hr>";

echo "대림대학교";
print "<hr>";

echo "대림대학교";
print "<hr>";
*/