<?php

$mypath = "./ParamFiles";
$today = date("Y-m-d_H-i-s");

$filename = $mypath . "/" . $today . ".param";


if (!@file($filename)) {
	$handle = fopen($filename, "x+");
	fclose($handle);
}
foreach ($_REQUEST as $attr) {
	$somecontent = $attr . "\n";
	file_put_contents($filename, $somecontent, FILE_APPEND | LOCK_EX);
}

?>