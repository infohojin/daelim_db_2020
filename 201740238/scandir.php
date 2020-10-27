<?php

function showDir($path){
$dir = scandir($path);
//print_R($dir);
echo "<ul>";
foreach($dir as $name) {
    if($name == "." || $name == "..") continue;
    
    if(is_dir($name)) {
        echo "<li>". showDir($path. "/" . $name) . "</li>";   
    } else {     
    echo "<li>".$name . "</li>";   
    }
}
echo "</ul>";
}

showDir(".");