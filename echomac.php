<?php
   
   require 'connect.php';
   
   
   $ip=$_SERVER['REMOTE_ADDR'];
   $mac = shell_exec('arp -a '.escapeshellarg(trim($ip)));
   $find="Physical";
   $pos=strpos($mac,$find);
   $macp=substr($mac,($pos+42),26);
   echo $macp;
   /*mysql_query("CREATE TABLE `".$macp."` ( `id` int(50) NOT NULL AUTO_INCREMENT,
 `notification` varchar(255) NOT NULL,
 `statusn` varchar(50) NOT NULL,
 `statusm` varchar(50) NOT NULL,
 PRIMARY KEY (`id`))");
   
   echo "Table $macp created successfully\n";*/
   
   
?>