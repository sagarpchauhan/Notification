<?php
$servername="localhost";
$username="root";


$connect=@mysql_connect("localhost","root","") or die("check your server connrction.");

mysql_select_db ("practise") or die ("No such database");

?>