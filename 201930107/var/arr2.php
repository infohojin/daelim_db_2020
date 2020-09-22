<?php

$arr = [
    'apple'=>"사과", 
    'kiwi'=>"키위", 
    'banana'=>"바나나",

    'func'=>function() {
        echo "\n함수실행";
    }
    
];
echo $arr['banana'];
echo $arr['kiwi'];
echo $arr['apple'];
$arr['func']();