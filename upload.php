<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dot Remote Install</title>
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
</style>
</head>
<body>
<div id="main"><div style='background: #fff; border: 1px solid #ced2d8; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; font-size: 14px; margin: 0 0 15px 0; padding: 8px; margin: 0 auto; width: 500px;'> 
<div style='background: #f4f5f6; border: 1px solid #cdcdcd; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; padding: 20px 20px 18px 20px;'> 
<h1 style='float: left; margin: 5px 0 70px 0; padding: 0 15px; background-image: url("http://cl.ly/images/item_types/archive.png\"); background-position: left center; background-repeat: no-repeat; font-weight: normal; line-height: 22px; padding: 0 0 0 24px; font-size: 14px;'>Dot</h1> 
<?php 

$ftpServer = $_REQUEST["server"]; 
$ftpUser = $_REQUEST["user"]; 
$ftpPass = $_REQUEST["pass"]; 

$conn = @ftp_connect($ftpServer); 
$login = @ftp_login($conn, $ftpUser, $ftpPass); 
$dir = 'public_html/'.$_REQUEST["dir"];

if (ftp_mkdir($conn, $dir)) {
 echo "successfully created $dir\n<br />";
} else {
 echo "There was a problem while creating $dir\n<br />";
}
if (ftp_mkdir($conn, $dir.'/admin')) {
 echo "successfully created directory\n<br />";
} else {
 echo "There was a problem while creating dir\n<br />";
}
if (ftp_mkdir($conn, $dir.'/content')) {
 echo "successfully created directory\n<br />";
} else {
 echo "There was a problem while creating dir\n<br />";
}
if (ftp_mkdir($conn, $dir.'/content/pages')) {
 echo "successfully created directory\n<br />";
} else {
 echo "There was a problem while creating dir\n<br />";
}
if (ftp_mkdir($conn, $dir.'/content/posts')) {
 echo "successfully created directory\n<br />";
} else {
 echo "There was a problem while creating dir\n<br />";
}
if (ftp_mkdir($conn, $dir.'/plugins')) {
 echo "successfully created directory\n<br />";
} else {
 echo "There was a problem while creating dir\n<br />";
}
if (ftp_mkdir($conn, $dir.'/themes')) {
 echo "successfully created directory\n<br />";
} else {
 echo "There was a problem while creating dir\n<br />";
}
if (ftp_mkdir($conn, $dir.'/themes/curves')) {
 echo "successfully created directory\n<br />";
} else {
 echo "There was a problem while creating dir\n<br />";
}
$putFile = @ftp_put($conn, $dir."/index.php", "http://github.com/jgmcelwain/dot/raw/master/dot/index.php", FTP_BINARY); 
@ftp_put($conn, $dir."/404.php", "http://github.com/jgmcelwain/dot/raw/master/dot/404.php", FTP_BINARY);
@ftp_put($conn, $dir."/.htaccess", "http://github.com/jgmcelwain/dot/raw/master/dot/.htaccess", FTP_BINARY);
@ftp_put($conn, $dir."/admin/admin.php", "http://github.com/jgmcelwain/dot/raw/master/dot/admin/admin.php", FTP_BINARY); 
@ftp_put($conn, $dir."/admin/autologin.php", "http://github.com/jgmcelwain/dot/raw/master/dot/admin/autologin.php", FTP_BINARY);
@ftp_put($conn, $dir."/admin/config.php", "config.php", FTP_BINARY); 
@ftp_put($conn, $dir."/admin/do_login.php", "http://github.com/jgmcelwain/dot/raw/master/dot/admin/do_login.php", FTP_BINARY); 
@ftp_put($conn, $dir."/admin/functions.php", "http://github.com/jgmcelwain/dot/raw/master/dot/admin/functions.php", FTP_BINARY);   
@ftp_put($conn, $dir."/admin/hotkeys.js", "http://github.com/jgmcelwain/dot/raw/master/dot/admin/hotkeys.js", FTP_BINARY);   
@ftp_put($conn, $dir."/admin/index.php", "http://github.com/jgmcelwain/dot/raw/master/dot/admin/index.php", FTP_BINARY); 
@ftp_put($conn, $dir."/admin/login.php", "http://github.com/jgmcelwain/dot/raw/master/dot/admin/login.php", FTP_BINARY);  
@ftp_put($conn, $dir."/admin/logout.php", "http://github.com/jgmcelwain/dot/raw/master/dot/admin/logout.php", FTP_BINARY);  
@ftp_put($conn, $dir."/admin/new.php", "http://github.com/jgmcelwain/dot/raw/master/dot/admin/new.php", FTP_BINARY);  
@ftp_put($conn, $dir."/admin/posts.php", "http://github.com/jgmcelwain/dot/raw/master/dot/admin/posts.php", FTP_BINARY);  
@ftp_put($conn, $dir."/admin/quick.php", "http://github.com/jgmcelwain/dot/raw/master/dot/admin/login.php", FTP_BINARY);  
@ftp_put($conn, $dir."/admin/side.php", "http://github.com/jgmcelwain/dot/raw/master/dot/admin/side.php", FTP_BINARY);  
@ftp_put($conn, $dir."/admin/sidebar.php", "http://github.com/jgmcelwain/dot/raw/master/dot/admin/sidebar.php", FTP_BINARY);
@ftp_put($conn, $dir."/admin/sidebar.txt", "http://github.com/jgmcelwain/dot/raw/master/dot/admin/sidebar.txt", FTP_BINARY);
@ftp_put($conn, $dir."/admin/style.css", "http://github.com/jgmcelwain/dot/raw/master/dot/admin/style.css", FTP_BINARY);
@ftp_put($conn, $dir."/content/pages/1.txt", "http://github.com/jgmcelwain/dot/raw/master/dot/content/pages/1.txt", FTP_BINARY);
@ftp_put($conn, $dir."/content/posts/1.txt", "http://github.com/jgmcelwain/dot/raw/master/dot/content/posts/1.txt", FTP_BINARY);
@ftp_put($conn, $dir."/plugins/dot_hello.php", "http://github.com/jgmcelwain/dot/raw/master/dot/plugins/dot_hello.php", FTP_BINARY);
@ftp_put($conn, $dir."/plugins/plugins.php", "http://github.com/jgmcelwain/dot/raw/master/dot/plugins/plugins.php", FTP_BINARY);
@ftp_put($conn, $dir."/themes/curves/404.php", "http://github.com/jgmcelwain/dot/raw/master/dot/themes/curves/404.php", FTP_BINARY);
@ftp_put($conn, $dir."/themes/curves/index.php", "http://github.com/jgmcelwain/dot/raw/master/dot/themes/curves/index.php", FTP_BINARY);
@ftp_put($conn, $dir."/themes/curves/page.php", "http://github.com/jgmcelwain/dot/raw/master/dot/themes/curves/page.php", FTP_BINARY);
@ftp_put($conn, $dir."/themes/curves/post.php", "http://github.com/jgmcelwain/dot/raw/master/dot/themes/curves/post.php", FTP_BINARY);
@ftp_put($conn, $dir."/themes/curves/sidebar.txt", "http://github.com/jgmcelwain/dot/raw/master/dot/themes/curves/sidebar.txt", FTP_BINARY);
@ftp_put($conn, $dir."/themes/curves/style.css", "http://github.com/jgmcelwain/dot/raw/master/dot/themes/curves/style.css", FTP_BINARY);
@ftp_put($conn, $dir."/admin/easyconfig.php", "easyconfig.php", FTP_BINARY);
@ftp_put($conn, $dir."/admin/configwrite.php", "configwrite.php", FTP_BINARY);
@ftp_put($conn, $dir."/admin/finish.php", "finish.php", FTP_BINARY);

ftp_chmod($conn, 0777, $dir."/admin/config.php") !== false;
ftp_chmod($conn, 0777, $dir."/admin/easyconfig.php") !== false;
ftp_chmod($conn, 0777, $dir."/admin/configwrite.php") !== false;
ftp_chmod($conn, 0777, $dir."/admin/finish.php") !== false;

if($putFile) 
echo "Sorted! Files uploaded OK. Click <a href='".$_REQUEST["siteurl"]."/".$_REQUEST["dir"]."/admin/easyconfig.php'>here</a> to configure your new installation...<br />";
else 
echo "File upload failed.<br />"; 
	
ftp_quit($conn); 
 
?>
</div> 
</div> 
</div>
</body>
</html>
