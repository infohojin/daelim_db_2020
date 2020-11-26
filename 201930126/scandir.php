<?php
//$d = scandir("./");

//배열로 반환
//print_r($i);
function showDir($path)
{
    $dir = scandir($path);
    echo "<ul>";

foreach($dir as $name)
{
    if($name=="."|| $name=="..")continue;
    
    if(is_dir($name))
    {
        echo "<li>".showDir($path."/".$name)."</li>";
    }else{
        echo "<li>".$name."</li>";
    }
}
echo "</ul>";
}
showDir(".");