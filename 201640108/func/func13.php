<?php

function recurstion($n)
{
    echo "hello" . $n;
    echo "<br>";

    if($n <5){

        recurstion($n+1);
    }
}

recurstion(0);