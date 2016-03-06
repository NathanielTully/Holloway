<?php

function userIsLoggedIn() {
	//If the action is login check that both fields are filled out.
	if (isset($_POST['action']) and $_POST['action'] == 'login') {
		if (!isset($_POST['username']) or $_POST['username'] == '' or
			!isset($_POST['password']) or $_POST['password'] == '') {
			$GLOBALS['loginError'] = 'Please provide a Username and Password.';
			return FALSE;
		}

		$password = $_POST['password'];

		//If there is no action specified then it checks for the user in the database
		//Start a new session if they are
		//unset the session vairiables if they aren't.
		if (databaseContainsUser($_POST['username'], $password)) {
			session_start();
			$_SESSION['loggedIn'] = TRUE;
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $password;
			return TRUE;
		} else {
			session_start();
			unset($_SESSION['loggedIn']);
			unset($_SESSION['username']);
			unset($_SESSION['password']);
			$GLOBALS['loginError'] = 'The specified Username or Password was incorrect.';
			return FALSE;
		}
	}

	if (isset($_POST['action']) and $_POST['action'] == 'logout') {
		session_start();
		unset($_SESSION['loggedIn']);
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		header('Location: http://www.iemployapp.com/');
		exit();
	}

	session_start();
	if (isset($_SESSION['loggedIn'])) {
		return databaseContainsUser($_SESSION['username'], $_SESSION['password']);
	}
}

function databaseContainsUser($username, $password) {
	include 'db.php';

	$username = mysqli_real_escape_string($link, $username);
	$password = mysqli_real_escape_string($link, $password);

	$sql = "SELECT COUNT(*) FROM user
		WHERE u_email='$username' AND u_password='$password'";
	$result = mysqli_query($link, $sql);
	if (!$result) {
		$error = 'Error searching for user.';
		include $_SERVER['DOCUMENT_ROOT'] . 'include/error.html.php';
		exit();
	}
	$row = mysqli_fetch_array($result);

	if ($row[0] > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
}

?>
