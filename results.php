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
				<input type="text" name="input" size="50" placeholder="Search....." value="<?php echo $_GET ['input']; ?>" />
				<input type="submit" value="search" />
			</form>
			<hr>
	<?php
		$input = $_GET['input'];//Note to self $input in the name of the search feild
		$terms = explode(" ", $input);
		$query = "SELECT * FROM search WHERE ";
		
		foreach ($terms as $each){
			$i++;
			if ($i == 1)
				$query .= "keywords LIKE '%$each%' ";
			else
				$query .= "OR keywords LIKE '%$each%' ";
		}
		
		// connecting to our mysql database
		mysql_connect("mysql17.unoeuro.com", "gunnyarts_com", "Cddee33vfr4");
		mysql_select_db("gunnyarts_com_db");
		
		$query = mysql_query($query);
		$numrows = mysql_num_rows($query);
		if ($numrows > 0){
			
			while ($row = mysql_fetch_assoc($query)){
				$id = $row['id'];
				$title = $row['title'];
				$description = $row['description'];
				$keywords = $row['keywords'];
				$link = $row['link'];
				echo "<h2><a href='$link'>$title</a></h2>
				$description<br /><br />";

			}
			
		}
		else
			echo "No results found for \"<b>$input</b>\"";
		
		// disconnect
		mysql_close();
	?>
		</section>
		<footer>
		</footer>
	</main>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
</body>
</html>