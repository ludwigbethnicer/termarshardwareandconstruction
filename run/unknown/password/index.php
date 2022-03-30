<?php

	$password = "user";
	$password2 = "Admin";
	$password3 = "admin";

	echo "Password: ".$password;
	echo "<br>";
	echo "Password2: ".$password2;
	echo "<br>";
	echo "Password2: ".$password3;
	echo "<br><br>";

	$encrytp_password = md5($password);
	$encrytp_password2 = md5($password2);
	$encrytp_password3 = md5($password3);

	echo "Password Encrypt: ".$encrytp_password;
	echo "<br>";
	echo "Password Encrypt2: ".$encrytp_password2;
	echo "<br>";
	echo "Password Encrypt3: ".$encrytp_password3;
	echo "<br><br>";

	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	echo substr(str_shuffle($permitted_chars), 0, 6);
	echo "<br><br>";

	$permitted_chars2 = '0123456789';
	echo substr(str_shuffle($permitted_chars2), 0, 6);
	echo "<br><br>";

	$permitted_chars3 = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	echo substr(str_shuffle($permitted_chars3), 0, 6);
	echo "<br><br>";

	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!#@';
	echo "Strong Password<br>";
	echo substr(str_shuffle($permitted_chars), 0, 12);
	echo "<br><br>";

	$permitted_chars3 = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!#@';
	echo "WiFi Password<br>";
	echo substr(str_shuffle($permitted_chars3), 0, 8);
	echo "<br><br>";