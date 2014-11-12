<!DOCTYPE html>
<html>
<head>
	<title>Boilerplate</title>
	<link href="css/reset.css" type="text/css" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map_canvas');
        var mapOptions = {
          center: new google.maps.LatLng(55.487064, 9.292209),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
	<main>
		<header>
			<?php include 'includes/menu_inc.php'; ?>
		</header>
		<section class="contact">
			<h1>Kontakt side</h1>
			
            
            <section class="contactus">
            <h2>Kontakt</h2>

                    <p>Ønsker du oplysninger om DYKONs landsdækkende forhandlernet, har                     du spørgsmål eller kommentarer i øvrigt, er du velkommen til at                         kontakte os.</p>
                
            <h2>DYKON A/S</h2>
                <p>
                Kongsbjerg 15<br>
                6640 Lunderskov<br>
                Tlf.: 76 84 03 00<br>
                Fax. 76 84 03 01<br>
                <br>
                E-mail: <a href="mailto:dykon@dykon.dk">dykon@dykon.dk</a> 
                <br> 
                E-mail ved jobansøgning: <a href="mailto:job@dykon.dk">job@dykon.dk</a>                 <br>
                <br>
                Du kan også anvende vores kontaktformular
                </p>
            </section>
            
            <section class="contactform">
                <h2>Kontakt formular</h2>
            <form class="contactform" action="contactformular.php" method="post"/>
            <p>
            Navn:
            <input type="text" class="box" size="25" name="cf_name" value>
            </p>
            <p>
            Titel:
            <input type="text" class="box" size="25" name="cf_title" value>
            </p>
            <p>
            Firma:
            <input type="text" class="box" size="25" name="cf_company" value>
            </p>
            <p>
            Email: 
            <input type="text" class="box" size="25" name="cf_email" value>
            </p>
            <p>
            Telefon:
            <input type="text" class="box" size="25" name="cf_tlf" value>
            </p>
            
            <br><p class="contactform">Besked</p>
            <textarea class="box" name="cf_message" rows="10" cols="38"></textarea><br>
                
            <input type="submit" value="Send"/>
            <input type="reset" value="Slet"/>
            </form>
            </section>
                
            <section class="googlemaps">
            <h2>Navigation</h2>
            <br>
            <div id="map_canvas"></div>
            </section>
		</section>

		<footer>
		</footer>
	</main>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
</body>
</html>