<?php

// SWAPS THE BACKGROUND IMAGE DEPENDING ON PAGE URI
function curPageURL() {
	$page = $_SERVER['REQUEST_URI'];
	if($page == '/' && '/index.php') 
	{
		echo 'background-image:url(images/bg-index.jpg);';
	}
	elseif($page == '/ingame.php') {
		echo 'background-image:url(images/bg-ingame.jpg);';
	}
	elseif($page == '/live.php') {
		echo 'background-image:url(images/bg-live.jpg);';
	}
	elseif($page == '/fantasy.php') {
		echo 'background-image:url(images/bg-fantasy.jpg);';
	}
	elseif($page == '/fandom.php') {
		echo 'background-image:url(images/bg-fandom.jpg);';
	}
	elseif($page == '/lifestyle.php') {
		echo 'background-image:url(images/bg-lifestyle.jpg);';
	}
	else
	{
		echo 'background-image:url(images/bg-signed-in.jpg);';
	}
};

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style=" <?php curPageURL(); ?> ">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Cordano :: Every Number in Sports</title>

<link rel="stylesheet" href="css/style.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>

</head>
