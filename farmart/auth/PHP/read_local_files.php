<?php

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '<pre>';
}

//scandir()
//1) using opendir() and readir()

$local_dir = 'C:\xampp\htdocs\FARMART\English\img';

$files = array();
//opendir (string $path) : resource
//readdir ([resource $dir_handle]) : string

if($handle = opendir($local_dir)){
    while (false !== ($file = readdir($handle))){
        if($file != '.' && $file != '..'){
            $files[] = $file;
        }
    }
    //closedir ( [resource $dir_handle] ) : void
    //close directory stream

    closedir($handle);
}

pre_r($files);