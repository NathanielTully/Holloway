<?php

//control file

	include 'include/access.php';


	//If the user is not logged in go to the home page
	if (!userIsLoggedIn()) {
		include 'include/home.html.php';
		exit();
	} else {
		include 'include/db.php';
		include 'include/dashboard.html.php';
	}









?>


