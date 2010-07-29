<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dot Set-Up Complete!</title>
<style> 
	body {
		font-family: "Helvetica Neue", Helvetica, Arial, Geneva, sans-serif; 
		font-size: 12px;
		-webkit-text-stroke: 1px transparent;
	}
	main {
		margin-top: auto;
		margin-bottom: auto;
	}
	a, a:hover, a:active {
		color: #61656D;
		text-decoration: none;
	}
	ul {
		list-style: none;
		position: absolute; 
		top: 0;
		right: 0;
		padding: 15px;
	}
	li {
		color: #A3A7AE;
		display: inline-block;
		font-size: 14px;
		font-weight: bold;
		margin-top: -50px;
		line-height: 25px;
		text-shadow: white 0px 1px 1px;
	}
	input {
		float: right;
	}
	#myselect { 
width:230px; 
float: right;
} 
#myselect option { 
width:220px; 
}
</style> 
</head>
<body>
<?php 

$url = 'http://github.com/jgmcelwain/dot';

$your_data = '<?php
$username = "'.$_REQUEST["user"].'";
$password = "'.$_REQUEST["pass"].'"; 
global $title; $title = "'.$_REQUEST["blogname"].'"; 
global $description; $description = "'.$_REQUEST["blogdesc"].'"; 
global $url; $url = "'.$_REQUEST["blogurl"].'"; 
global $theme; $theme="curves"; 
$timezone = "'.$_REQUEST["timezone"].'";
global $version; $version = "<b>Dot 1.0</b>";
global $credits; $credits = " - Created by the Dot community. Find us on <a href=&#39;'.$url.'&#39;>Github</a>";
error_reporting(E_ALL ^ E_NOTICE);
session_start();
header("Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
header("Pragma: no-cache");
$cookie_name = "Dot";
$cookie_time = (3600 * 24 * 14);
if(!$_SESSION["username"]){include_once "autologin.php";}
?>'; 

$fp = fopen("config.php", "r+"); 

fwrite($fp, $your_data); 

fclose($fp);

?>

<div id="main"><div style='background: #fff; border: 1px solid #ced2d8; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; font-size: 14px; margin: 0 0 15px 0; padding: 8px; margin: 0 auto; width: 500px;'> 
<div style='background: #f4f5f6; border: 1px solid #cdcdcd; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; padding: 20px 20px 18px 20px;'> 
<h1 style='float: left; margin: 5px 0 14px 0; padding: 0 15px; background-image: url("http://cl.ly/images/item_types/archive.png\"); background-position: left center; background-repeat: no-repeat; font-weight: normal; line-height: 22px; padding: 0 0 0 24px; font-size: 14px;'>Dot</h1> 
Brilliant, all done! <a href="finish.php">Finish and Go To Blog</a>
</div> 
</div> 
</div>
</body>
</html>
