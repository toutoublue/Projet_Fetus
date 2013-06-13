<?php

session_start();

$timeout = 60*60; //1h

/*
 * This check is made every refresh of the page containing this library.
 */		
if (isset($_SESSION['timeout']) ){
					
	$session_life = time() - $_SESSION['timeout']; 
	
	/*
	 * In this way if session remains idle for 'timeout' seconds it will be closed.
	 */	
    if($session_life > $timeout){ 
		destroy_session_and_data();

		header("HTTP/1.1 307 temporary redirect");	
		header("Location: masterview.php?mex_timeout=SessionTimeOutExpires"); 
		exit; 
    }			
}
		
$_SESSION['timeout'] = time();

function destroy_session_and_data(){
	if (session_id() != "" || isset($_COOKIE[session_name()]))
	setcookie(session_name(), '', time() - 2592000, '/');
	session_unset(); 	// empty session
    session_destroy();  // destroy session	
}

?>
