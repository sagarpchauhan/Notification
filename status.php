<?php
	require 'connect.php';
	$q=mysql_query("select notification from messagetest where status='unread'");
	$qr=mysql_fetch_assoc($q);
	echo $qr['notification'];
?>