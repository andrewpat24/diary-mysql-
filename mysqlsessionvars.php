<?php
	// session_start(); //has to be located AT THE VERY VERY BEGINNING
// 	
// 	$_SESSION['loginid']=1;
// 	
// 	echo $_SESSION['loginid'];
// 	
	setcookie("id","", time()-3600);
	echo $_COOKIE['id'];
	
?>