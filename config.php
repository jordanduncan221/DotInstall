
global $version; $version = "<b>Dot 1.0</b>";
global $credits; $credits = " - Created by the Dot community. Find us on <a href='http://github.com/jgmcelwain/dot'>Github</a>";
error_reporting(E_ALL ^ E_NOTICE);
session_start();
header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT'); 
header('Cache-Control: no-store, no-cache, must-revalidate'); 
header('Cache-Control: post-check=0, pre-check=0', false); 
header('Pragma: no-cache');
$cookie_name = 'Dot';
$cookie_time = (3600 * 24 * 14);
if(!$_SESSION['username']){include_once 'autologin.php';}
?>