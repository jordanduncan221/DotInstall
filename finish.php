<?php 
$myFile = "easyconfig.php";
unlink($myFile);
header( 'Location: ../index.php' ) ;
?>
