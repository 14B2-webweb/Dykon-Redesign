<!DOCTYPE html>
<html>
<head>
	<title>Boilerplate</title>
	<link href="css/reset.css" type="text/css" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
	<main>
		<header>
			<?php include 'includes/menu_inc.php'; ?>
		</header>
		<section>
			<h1>Search my Site!</h1>
			<form action="./results.php" method="GEt">
				<input type="text" name="input" size="50" placeholder="Search...." />
				<input type="submit" value="search" />
			</form>
		</section>
		<footer>
		</footer>
	</main>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
</body>
</html>