<?php

$wunschloginkennung = "abc";
$wunschpasswort = "12345";


if($wunschloginkennung == $_POST["loginkennung"] && $wunschpasswort == $_POST["passwort"])
	{
	
	header("location:sicher.php");
	}else{

	header("location:offen.php");
	}

?>