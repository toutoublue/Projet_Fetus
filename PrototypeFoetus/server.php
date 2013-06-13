<?php

if (isset($_POST)) {

	$id = $_POST['sessionID'];
	$param = $_POST['param'];
	
	$off = file_get_contents('./off/Bones.off', FILE_USE_INCLUDE_PATH);
	echo $off;
/*	 
	$pid = pcntl_fork();

	if ($pid == -1) {
		die('dupplication impossible');
	} else if ($pid) {
		// le père
		pcntl_wait($status);
		// Protège encore des enfants zombies
	} else {
		// le fils
		$mypath = "./ParamFiles";
		$today = date("Y-m-d_H-i-s");

		$filename = $mypath . "/" . $today . $id . ".param";

		if (!@file($filename)) {
			$handle = fopen($filename, "x+");
			fclose($handle);
		}		
		file_put_contents($filename, $param, FILE_APPEND | LOCK_EX);
		
		//exec("generateSkeleton.sh -" . $param);

		// depuis PHP 5
		$off = file_get_contents('./off/Envelope.off', FILE_USE_INCLUDE_PATH);

		echo $off;

	}
*/
} else {
	die("You cannot access this page!");
}
?>