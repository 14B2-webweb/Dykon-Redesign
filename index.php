<?php include 'includes/head_inc.php'; ?>
	<!-- INSERT PLUGIN CSS FILES HERE -->
	<link href="plugins/slider/css/slider.css" rel="stylesheet" type="text/css">
	<!---------------------------------->
	
	<title>Dykon index med imageslider</title><!-- Set page title -->
<?php include 'includes/header_inc.php'; ?>

	<!------------------------------>
	<!-- INSERT PAGE CONTENT HERE -->
	<!------------------------------>
	<section>
<!-- Kode fra Github til nearby-image-partial-visible-slider -->	
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container">
        <!-- Slides Container -->
        <div u="slides" id="slides">
            <div><img u="image" src="images/921664-sleeping-baby.jpg" /></div>
            <div><img u="image" src="images/shutterstock_130324304.jpg" /></div>
            <div><img u="image" src="images/M_Id_436106_Sleeping_Baby.jpg" /></div>
            <div><img u="image" src="images/Womenman-sleeping.jpg" /></div>
        </div>
        
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora13l" style="width: 40px; height: 50px; top: 123px; left: 30px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora13r" style="width: 40px; height: 50px; top: 123px; right: 30px">
        </span>
        <!-- Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">javascript</a>
    </div>
    <!-- Jssor Slider End -->



	<article class="forsidetekst"
	<h1>Velkommen til Dykon</h1>
	<h3>Dykon A/S er Nordens førende producent af naturfyldsdyner og puder.<br> 
	Vi producerer dyner og puder af høj kvalitet, som vi leverer til vores partnere.</h3>
	</article>

	<img class="aarets" src="images/aarets-virksomhed-2013.jpg">
	</section>
 <?php include 'includes/footer.php'; ?>
	<!-- INSERT PLUGIN JAVASCRIPT HERE -->
    <script type="text/javascript" src="plugins/slider/js/jssor.js"></script>
    <script type="text/javascript" src="plugins/slider/js/jssor.slider.js"></script>
    <script type="text/javascript" src="plugins/slider/js/jssor.slider.run.js"></script>
	<!----------------------------------->
	<script src="js/script.js" type="text/javascript"></script>
</body>
</html>