<?php
// 함수 이름은 중복 되면 안돼요.

if(!function_exists("html_get_contents")){
  function html_get_contents($theme, $path="layout.html")
  {
    $filename = "../resource/".$theme."/".$path;
    // $filename = "../resource/layout02/layout.html";
    $body = file_get_contents($filename);
    return $body;
  } 
} 

if(!function_exists('resource')){
  function resource($file, $vars=[]):string
  {
    if(\file_exists($file)){
      extract($vars);
      ob_start();

      include($file);

      return ob_get_clean();
  } else{
      echo __FUNCTION__." ";
      echo $file."을 읽을 수 없습니다.";
      exit;
    }
  }
}

