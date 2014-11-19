<?php include 'includes/head_inc.php'; ?>
	<!-- INSERT PLUGIN CSS FILES HERE -->
	<!---------------------------------->
	
	<title>Dykon index med imageslider</title><!-- Set page title -->
<?php include 'includes/header_inc.php'; ?>

	<!------------------------------>
	<!-- INSERT PAGE CONTENT HERE -->
	<!------------------------------>
	<section>
	<?php
		$input = $_GET['input'];
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
				echo "<h2 class='result-title'><a href='$link'>$title</a></h2>
				<p class='result-description'>$description</p>";

			}
			
		}
		else
			echo "No results found for \"<b>$input</b>\"";
		
		// disconnect
		mysql_close();
	?>
	</section>

 <?php include 'includes/footer.php'; ?>
	<!-- INSERT PLUGIN JAVASCRIPT HERE -->
	<!----------------------------------->
	<script src="js/script.js" type="text/javascript"></script>
</body>
</html>