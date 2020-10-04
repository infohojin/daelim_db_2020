<?php
require_once "resource.php";

$layout = "layout03";
$layout = html_get_resource($layout);
$content = html_get_resource("$layout02","hello.html");

$layout = str_replace("{{contents}}", $content, $layout);
echo $layout;