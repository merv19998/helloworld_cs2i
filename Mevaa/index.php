<?php
    session_start ();
	$directory = 'php/template/';
	$link = '';
	$index = '';
	$footer = '';
	$header = 'php/';
	$active = 'index';
	if(empty($_SESSION['current'])){
	    header('location:php/Login.php');
    }
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php include $directory.'link.php'?>
    <title>MyServices</title>
</head>
<body>

</body>
</html>
