<?php

	$mysqli = new mysqli('localhost', 'root', '', 'player');
	if (mysqli_connect_errno()) {
		prinf("Ошибка!", mysqli_mysqliect_error());
		exit();
	}



	$mysqli->set_charset('utf8');

/*	$query = $mysqli->query('SELECT * FROM music');
	while ($row =mysqli_fetch_assoc($query) ) {
		echo '<div><span>Название:  </span>'.$row['name'].'</div>';
		echo '<div><span>Автор:  </span>'.$row['author'].'</div>';
		echo '<div><span>Дата:  </span>'.$row['year'].'</div>';
	}*/

	error_reporting(0);

	$name = $_POST['name'];
	$author = $_POST['author'];

	$query = "INSERT into music(name,author) values('$name','$author')";


	if ($mysqli->query($query) === true) {
		echo "ADDED: ", ".$name.", ".$author.";
	} else {
		echo "error: ".$query."<br>".$mysqli->error;
	}

	$mysqli->close();


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Player</title>
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=MuseoModerno:wght@100;200;400;600;900&display=swap" rel="stylesheet">
	<style>
		:focus, :hover, :active{
			outline: 0;
		}
		body{
			width: 100vw;
			height: 100vh;
			margin: 0 auto;
			display: -webkit-flex;
			display: -moz-flex;
			display: -ms-flex;
			display: -o-flex;
			display: flex;
			-ms-align-items: center;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			background-image: linear-gradient(to right top, #ee713b, #f27741, #f67c47, #f9824d, #fd8753);
			color: #fff;
			font-family: 'MuseoModerno', 'Balsamiq Sans', cursive;
		}
		h1{
			font-size: 80px;
			margin: 0;
			padding: 0;
		}
		h1 span{
			color: #FF2727;
			text-decoration: underline;
			text-decoration-color: #FF2727;
		}
		form{
			width: 200px;
			display: -webkit-flex;
			display: -moz-flex;
			display: -ms-flex;
			display: -o-flex;
			display: flex;
			flex-direction: column;
			-ms-align-items: center;
			align-items: center;
		}
		input{
			border: none;
			background: rgba(251,255,255, .3);
			padding: .5em 1em;
			margin: 10px;
			border-radius: 1em;
			color: #fff;
			font-family: 'MuseoModerno', 'Balsamiq Sans', cursive;
			font-size: 18px;
		}
		input::placeholder{
			font-size: 18px;
			color: rgba(255, 255, 255, .8)
		}
		input[type=submit]{
			color: #fff;
			cursor: pointer;
			transition: .3s;
			background: #FF2727;
		}
		input[type=submit]:hover{
			background: #CB0000;
		}
	</style>
</head>
<body>
	<h1>Add your <span>music</span> here</h1>
	<form action="#" method="post">
		<input type="text" name="name" placeholder="Name of the song">
		<input type="text" name="author" placeholder="Author of the song">
		<input type="submit" value="Submit">
	</form>
</body>
</html>