<?php

	setcookie("Username","null",time()+60*24*24);
	setcookie("LoginState","false",time()+60*24*24);
    setcookie("HasRegistered","yetto",time()+60*24*24);
    header("Location: index.php");
?>