<?php
header('Content-Type:text/html;charset=utf-8');
function createDirectory($path) {   if (! file_exists ( $path )) {   $array = explode ( "/", $path );   foreach ( $array as $key => $dir ) {   $dirname = is_null ( $dirname ) ? $dir : ($dirname . "/" . $dir);   mkdir ( $dirname ,0777);   }   }   }