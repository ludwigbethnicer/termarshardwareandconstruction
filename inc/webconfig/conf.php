<?php

	$chckfle = file_exists("inc/srvr.php");
	if ($chckfle) {
		include_once "inc/srvr.php";
	} else {
		$chckfle1 = file_exists("../../inc/srvr.php");
		if ($chckfle1) {
			include_once "../../inc/srvr.php";
		} else {
			include_once "../../../inc/srvr.php";
		}
	}

	try {
		$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
		$qry_webconf = "SELECT * FROM conf LIMIT 1";
		$stmt_webconf = $cnn->prepare($qry_webconf);
		$stmt_webconf->execute();
		$row_webconf = $stmt_webconf->fetch(PDO::FETCH_ASSOC);

		$cmpnyname = $row_webconf['cmpny_name'];
		$sysname = $row_webconf['sys_name'];
		$sysver = $row_webconf['sys_ver'];
		$syslogo = $row_webconf['sys_logo'];
		$navbarlogo = $row_webconf['navbar_logo'];
		$favicon = $row_webconf['favicon'];
		$quotetitle = $row_webconf['quote_title'];
		$ceopres = $row_webconf['ceo_pres'];
		$memail = $row_webconf['memail'];
		$telno = $row_webconf['telno'];
		$mobileno = $row_webconf['mobileno'];
		$maddress = $row_webconf['maddress'];
		$themename = $row_webconf['themename'];
		$domainhome = $row_webconf['domainhome'];
		$fontglobal = $row_webconf['fontglobal'];
		$geomap = $row_webconf['geo_map'];
		$idletime = $row_webconf['idletime'] * 60;
		$build_by = $row_webconf['build_by'];
		$cwebzite = $row_webconf['cwebzite'];
		$dcurrencyx = $row_webconf['dcurrencyx'];
		$navbarorrient = $row_webconf['nav_bar_orrient'];

		$primarycolor = $row_webconf['primary_color'];
		$secondcolor = $row_webconf['second_color'];
		$thirdcolor = $row_webconf['third_color'];
		$forthcolor = $row_webconf['forth_color'];
		$fifthcolor = $row_webconf['fifth_color'];
		$sixthcolor = $row_webconf['sixth_color'];
		$seventhcolor = $row_webconf['seventh_color'];
		$eightcolor = $row_webconf['eight_color'];
		$ninghtcolor = $row_webconf['ninght_color'];
		$tenthcolor = $row_webconf['tenth_color'];
	} catch(PDOException $e) {
		$err = $e->getMessage();
		$err2 = strrchr($e,"1049");
		if($err2=1049){
			echo "Error: Unknown Database.<br><a href='../../dbase/creadb'>Fix It!</a>";
			die;
		}
	}
	$cnn = null;