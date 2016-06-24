<?php
	if(!(isset($_COOKIE["LoginState"]))){
	setcookie("LoginState","false",time()+60*24*24);
	}
	
	if(!(isset($_COOKIE["HasRegistered"]))){
    setcookie("HasRegistered","yetto",time()+60*24*24);
	}
    
	if(!(isset($_COOKIE["Username"]))){    
    setcookie("Username","null",time()+60*24*24);
	}
?>		