<?php
	require("./config.php");
	session_start();
	session_destroy();
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[pm]', '$_SESSION[users_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[pre]', '$_SESSION[users_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[lss]', '$_SESSION[users_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[cji]', '$_SESSION[users_id]')") or die(mysql_error());
		header("location:index.php");
		
?> 

