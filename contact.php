<?php include 'includes/head_inc.php'; ?>
	<!-- INSERT PLUGIN CSS FILES HERE -->
	<link href="plugins/slider/css/slider.css" rel="stylesheet" type="text/css">
	<!---------------------------------->
	
	<title>DYKON | Kontakt</title><!-- Set page title -->
<?php include 'includes/header_inc.php'; ?>
	<!------------------------------>
	<!-- INSERT PAGE CONTENT HERE -->
	<!------------------------------>

	<section class="contact">
			<h1>Kontakt</h1>
			
            
            <section class="contactus">
                    <br><br><p>Ønsker du oplysninger om DYKON's landsdækkende forhandlernet, har du spørgsmål eller kommentarer i øvrigt, er du velkommen til at                         kontakte os.</p>
                
            <h2 class="contact">DYKON A/S</h2>
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
            <h2 class="contact">Kontakt formular</h2>
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
            
            <textarea name="cf_message" rows="10" cols="44"></textarea><br>
                
            <input class="button" type="submit" value="Send"/>
            <input class="button" type="reset" value="Slet"/>
            </form>
            </section>
                
            <section class="googlemaps">
            <h2 class="contact">Navigation</h2>
            <iframe class="navigation" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2260.6001275864437!2d9.292219999999999!3d55.487066999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464b5e1b0c0e723d%3A0xa2775a023fd1fdac!2sKongsbjerg+15%2C+6640+Lunderskov!5e0!3m2!1sda!2sdk!4v1416489727706" width="280" height="350" frameborder="0" style="border:0"></iframe>
            </section>
	</section
 <?php include 'includes/footer.php'; ?>
	<!-- INSERT PLUGIN JAVASCRIPT HERE -->
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
	<!----------------------------------->
	<script src="js/script.js" type="text/javascript"></script>
</body>
</html>