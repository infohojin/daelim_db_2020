<?php
include "theme.conf.php";

$layout = file_get_contents($theme['layout']);
$contents = file_get_contents($theme['new']);

$layout = str_replace("{{contents}}",$contents,$layout);

echo $layout;
