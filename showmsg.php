<?php
	require 'connect.php';
	$ip=$_SERVER['REMOTE_ADDR'];
	$mac = shell_exec('arp -a '.escapeshellarg(trim($ip)));
	$find="Physical";
	$pos=strpos($mac,$find);
	$macp=substr($mac,($pos+42),26);
	
	session_start();
	$count=$_SESSION['msgcount'];
	$rcount=$_SESSION['rcount'];
	$urcount=$_SESSION['urcount'];
	$flag=$_SESSION['flag'];
	
	mysql_query("update mactable set read_count='$count',unread_count=0 where macid='$macp'");
	
	$q=mysql_query("select * from messagetest");
	while($row=mysql_fetch_assoc($q))
	{
		echo $row['notification']."<br>";
	}
?>