<?php

function recursion($n) {
    echo "hello" . $n;
    echo "<br>";

    // 종료조건
    if ($n < 5) {
        // 자기 자신
        recursion($n+1);
    }
}

recursion(0);