<?php
function recursion($n)
{
    echo "hello" . $n . "<br>";
    if ($n < 5) {
        recursion($n+1);
    }
}

recursion(0);