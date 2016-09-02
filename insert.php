<?php
	require 'connect.php';
	 $ip=$_SERVER['REMOTE_ADDR'];
   $mac = shell_exec('arp -a '.escapeshellarg(trim($ip)));
   $find="Physical";
   $pos=strpos($mac,$find);
   $macp=substr($mac,($pos+42),26);
	mysql_query("insert ignore into mactable values('$macp','0','0','false')");
?>