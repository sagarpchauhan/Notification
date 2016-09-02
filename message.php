<?php
	require 'connect.php';
	if(isset($_POST['message']))
	{
		$msg=$_POST['message'];
		mysql_query("insert into messagetest values('','$msg')");
		mysql_query("update mactable set flag='false'");
	}
?>

<form action="message.php" method="post">
	<textarea id="message" name="message" rows="4" cols="25"></textarea><br>
	<input type="submit" value="send">
</form>