<?php
	setcookie("nome", "", time()-3600);
	setcookie("logado", "", time()-3600);
	setcookie("id", "", time()-3600);
	unset($_COOKIE['nome']);
	unset($_COOKIE['logado']);
	unset($_COOKIE['id']);
	
	$redirect2 = "home.html";
	header("location:$redirect2");
?>