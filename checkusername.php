<?php

// my username database

$username[] = "aaa";
$username[] = "aab";
$username[] = "aaab";
$username[] = "aaaa";
$username[] = "aaac";

$valid = TRUE;

if (isset($_GET['vuname'])) {
	$user = $_GET['vuname'];
	if (in_array($user, $username)) {
		$valid = FALSE;
	}
} else {
	$valid = FALSE;
}

echo json_encode($valid);

?>