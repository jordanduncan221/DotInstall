<?php $inputblogurl = substr($QUERY_STRING, 0, -21); ?>
<html>
<head>
<title>Dot Set-Up</title>
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
<div id="main"><div style='background: #fff; border: 1px solid #ced2d8; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; font-size: 14px; margin: 0 0 15px 0; padding: 8px; margin: 0 auto; width: 500px;'> 
<div style='background: #f4f5f6; border: 1px solid #cdcdcd; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; padding: 20px 20px 18px 20px;'> 
<h1 style='float: left; margin: 5px 0 14px 0; padding: 0 15px; background-image: url("http://cl.ly/images/item_types/archive.png\"); background-position: left center; background-repeat: no-repeat; font-weight: normal; line-height: 22px; padding: 0 0 0 24px; font-size: 14px;'>Dot</h1> 
<p><b>Congratulations!</b> Dot has been successfully installed on your server and now all that's left is to set it up!<p>
<form name="form" ACTION="configwrite.php" METHOD="post">
<table width="436" border="0">
  <tr>
    <th width="145" scope="row">Username:</th>
    <td width="281"><input name="user" type="text"></td>
  </tr>
  <tr>
    <th scope="row">Password:</th>
    <td><input name="pass" type="password"></td>
  </tr>
  <tr>
    <th scope="row">Blog Name:</th>
    <td><input name="blogname" type="text"></td>
  </tr>
  <tr>
    <th scope="row">Blog Description:</th>
    <td><input name="blogdesc" type="text"></td>
  </tr>
  <tr>
    <th scope="row">Your Blog's URL:</th>
    <td><input name="blogurl" type="text" value="<?php echo $inputblogurl; ?>"></td>
  </tr>
  <tr>
    <th scope="row">Timezone:</th>
    <td><select name="timezone" id="mySelect">
      <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
      <option value="America/Adak">(GMT-10:00) Hawaii-Aleutian</option>
      <option value="Etc/GMT+10">(GMT-10:00) Hawaii</option>
      <option value="Pacific/Marquesas">(GMT-09:30) Marquesas Islands</option>
      <option value="Pacific/Gambier">(GMT-09:00) Gambier Islands</option>
      <option value="America/Anchorage">(GMT-09:00) Alaska</option>
      <option value="America/Ensenada">(GMT-08:00) Tijuana, Baja California</option>
      <option value="Etc/GMT+8">(GMT-08:00) Pitcairn Islands</option>
      <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
      <option value="America/Denver">(GMT-07:00) Mountain Time (US & Canada)</option>
      <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
      <option value="America/Dawson_Creek">(GMT-07:00) Arizona</option>
      <option value="America/Belize">(GMT-06:00) Saskatchewan, Central America</option>
      <option value="America/Cancun">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
      <option value="Chile/EasterIsland">(GMT-06:00) Easter Island</option>
      <option value="America/Chicago">(GMT-06:00) Central Time (US & Canada)</option>
      <option value="America/New_York">(GMT-05:00) Eastern Time (US & Canada)</option>
      <option value="America/Havana">(GMT-05:00) Cuba</option>
      <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
      <option value="America/Caracas">(GMT-04:30) Caracas</option>
      <option value="America/Santiago">(GMT-04:00) Santiago</option>
      <option value="America/La_Paz">(GMT-04:00) La Paz</option>
      <option value="Atlantic/Stanley">(GMT-04:00) Faukland Islands</option>
      <option value="America/Campo_Grande">(GMT-04:00) Brazil</option>
      <option value="America/Goose_Bay">(GMT-04:00) Atlantic Time (Goose Bay)</option>
      <option value="America/Glace_Bay">(GMT-04:00) Atlantic Time (Canada)</option>
      <option value="America/St_Johns">(GMT-03:30) Newfoundland</option>
      <option value="America/Araguaina">(GMT-03:00) UTC-3</option>
      <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
      <option value="America/Miquelon">(GMT-03:00) Miquelon, St. Pierre</option>
      <option value="America/Godthab">(GMT-03:00) Greenland</option>
      <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
      <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
      <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
      <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
      <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
      <option value="Europe/Belfast">(GMT) Greenwich Mean Time : Belfast</option>
      <option value="Europe/Dublin">(GMT) Greenwich Mean Time : Dublin</option>
      <option value="Europe/Lisbon">(GMT) Greenwich Mean Time : Lisbon</option>
      <option value="Europe/London" selected>(GMT) Greenwich Mean Time : London</option>
      <option value="Africa/Abidjan">(GMT) Monrovia, Reykjavik</option>
      <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
      <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
      <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
      <option value="Africa/Algiers">(GMT+01:00) West Central Africa</option>
      <option value="Africa/Windhoek">(GMT+01:00) Windhoek</option>
      <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
      <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
      <option value="Asia/Gaza">(GMT+02:00) Gaza</option>
      <option value="Africa/Blantyre">(GMT+02:00) Harare, Pretoria</option>
      <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
      <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
      <option value="Asia/Damascus">(GMT+02:00) Syria</option>
      <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
      <option value="Africa/Addis_Ababa">(GMT+03:00) Nairobi</option>
      <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
      <option value="Asia/Dubai">(GMT+04:00) Abu Dhabi, Muscat</option>
      <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
      <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
      <option value="Asia/Yekaterinburg">(GMT+05:00) Ekaterinburg</option>
      <option value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
      <option value="Asia/Kolkata">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
      <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
      <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
      <option value="Asia/Novosibirsk">(GMT+06:00) Novosibirsk</option>
      <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
      <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
      <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
      <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
      <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
      <option value="Australia/Perth">(GMT+08:00) Perth</option>
      <option value="Australia/Eucla">(GMT+08:45) Eucla</option>
      <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
      <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
      <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
      <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
      <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
      <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
      <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
      <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
      <option value="Australia/Lord_Howe">(GMT+10:30) Lord Howe Island</option>
      <option value="Etc/GMT-11">(GMT+11:00) Solomon Is., New Caledonia</option>
      <option value="Asia/Magadan">(GMT+11:00) Magadan</option>
      <option value="Pacific/Norfolk">(GMT+11:30) Norfolk Island</option>
      <option value="Asia/Anadyr">(GMT+12:00) Anadyr, Kamchatka</option>
      <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
      <option value="Etc/GMT-12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
      <option value="Pacific/Chatham">(GMT+12:45) Chatham Islands</option>
      <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
      <option value="Pacific/Kiritimati">(GMT+14:00) Kiritimati</option>
    </select></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><input type="submit" value="Submit"></td>
  </tr>
</table>
</select>
</form>
</div> 
</div> 
</div>
</html>
