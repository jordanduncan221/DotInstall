<?php
$username = "JrdnDncn"; "admin";
$password = "dotinstaller"; "lol";
$randomword = "bibblebobblechocolatemousse";

if (isset($_COOKIE['MyLoginPage'])) {
   if ($_COOKIE['MyLoginPage'] == md5($password.$randomword)) {
?>
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
<h1 style='float: left; margin: 5px 0 14px 0; padding: 0 15px; background-image: url("http://cl.ly/images/item_types/archive.png\"); background-position: left center; background-repeat: no-repeat; font-weight: normal; line-height: 22px; padding: 0 0 0 24px; font-size: 14px;'>Dot</h1>

<p><span style="margin-top: -10px;">So, you want to install Dot remotely? No problem! Just fill out your FTP details below and we'll get started!</span></p> 
<form action="upload.php" method="post">
  <table width="455" border="0">
  <tr>
    <th width="222" style="text-align: left" scope="row">Site URL (No Trailing Slash) </th>
    <td width="223"><input name="siteurl" type="text" /></td>
  </tr>
  <tr>
    <th style="text-align: left" scope="row">FTP Server </th>
    <td><input name="server" type="text" /></td>
  </tr>
  <tr>
    <th style="text-align: left" scope="row">FTP Usename </th>
    <td><input name="user" type="text" /></td>
  </tr>
  <tr>
    <th style="text-align: left" scope="row">FTP Password </th>
    <td><input name="pass" type="password" /></td>
  </tr>
  <tr>
    <th style="text-align: left" scope="row">Blog Directory </th>
    <td><input name="dir" type="text" />
    </td>
  </tr>
  <tr>
    <th style="text-align: left" scope="row"></th>
    <td><input name="submit" type="submit" />
    </td>
  </tr>
</table>
</form>
<?php
      exit;
   } else {
      echo "<p>Bad cookie. Clear please clear them out and try to login again.</p>";
      exit;
   }
}

if (isset($_GET['p']) && $_GET['p'] == "login") {
   if ($_POST['name'] != $username) {
      echo "<p>Sorry, that username does not match. Use your browser back button to go back and try again.</p>";
      exit;
   } else if ($_POST['pass'] != $password) {
      echo "<p>Sorry, that password does not match. Use your browser back button to go back and try again.</p>";
      exit;
   } else if ($_POST['name'] == $username && $_POST['pass'] == $password) {
      setcookie('MyLoginPage', md5($_POST['pass'].$randomword));
      header("Location: $_SERVER[PHP_SELF]");
   } else {
      echo "<p>Sorry, you could not be logged in at this time. Refresh the page and try again.</p>";
   }
}
?>
<div id="main"><div style='background: #fff; border: 1px solid #ced2d8; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; font-size: 14px; margin: 0 0 15px 0; padding: 8px; margin: 0 auto; width: 500px;'> 
<div style='background: #f4f5f6; border: 1px solid #cdcdcd; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; padding: 20px 20px 18px 20px;'> 
<h1 style='float: left; margin: 5px 0 14px 0; padding: 0 15px; background-image: url("http://cl.ly/images/item_types/archive.png\"); background-position: left center; background-repeat: no-repeat; font-weight: normal; line-height: 22px; padding: 0 0 0 24px; font-size: 14px;'>Dot</h1>
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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" method="post"><fieldset>
<label><input type="text" name="name" id="name" /> Name</label><br />
<label><input type="password" name="pass" id="pass" /> Password</label><br />
<input type="submit" id="submit" value="Login" />
</fieldset></form> 
</div> 
</div> 
</div>
</body>
</html>
