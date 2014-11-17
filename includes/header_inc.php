
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
	<main>
		<header>
			<section class="header-left">
				<a href="index.php"><img src="images/logo.png" alt="Dykon gås logo" class="goose-logo"></a>
			</section>
			<section class="header-center">
				<a href="index.php"><img src="images/dykon.png" alt="Dykon logo" class="dykon-logo"></a>
			</section>
			<section class="header-right">
				<a href="#">EN</a>
				<a href="#">DE</a>
				<form action="./results.php" method="GET" class="header-search">
					<input type="text" name="input" placeholder="Search...." class="search-bar" />
				</form>
			</section>
<?php include 'includes/menu_inc.php'; ?>
			
		</header>
