<?php
//$msg = [];
$msg = [
    ['greeting' => "hello"],
    "안녕하세요",
    ['message' => "daelim univ"]
];

foreach ($msg as $k => $v) {
    echo "키는=" . $k . " ";
    echo "값은="; //. $v;
    
    if (is_array($v)) {
        print_r($v);
        foreach ($v as $key => $value) {
            //echo $value;
            for ($i=0; $i<strlen($value); $i++) {
                echo "(" . $value[$i] . ")";
            }
        }
    } else {
        echo $v;
    }

    print "<br>";
}