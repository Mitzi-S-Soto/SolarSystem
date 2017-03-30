<!DOCTYPE html>
<html>
    <head>
        <title>Solar System Model</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!--Normalize CSS-->
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <!--Style.css-->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <!--Google Fonts-->
        <?php include 'includes/google-fonts.html';?>
        <!--scripts-->
	<script src="javascript/jquery-3.2.0.min.js"></script>
	<script src="javascript/jquery.mousewheel.js"></script>
	<script>
	$(function(){
		$("body").mousewheel(function(event, delta) {
			this.scrollLeft -= (delta * 30);
			event.preventDefault();
		});   
	});
	</script>
    </head>
    
    <body>
        <div id="container">
        <!--Include Header-->
        <?php include 'includes/header.html';?>
    
        
            <div class="planet" id="thesun">&nbsp;</div><!--end the sun-->
            
            <div id="mercury">
                <img src="imgs/mercury.png" alt="Mercury" id="mercuryimg" />
            
                <div id="testorbit">
                    <div id="testmoon"></div>
                </div>
            </div> <!--end planet-->
            <div >&nbsp;</div> <!--end planet-->
            <div >&nbsp;</div> <!--end planet-->
            <div >&nbsp;</div> <!--end planet-->
            
            <div id="asteroidbelt">&nbsp;</div><!--end asteroid belt-->
            
            <div >&nbsp;</div> <!--end planet-->
            
            <div >&nbsp;</div> <!--end planet-->
            <div >&nbsp;</div> <!--end planet-->
            <div >&nbsp;</div> <!--end planet-->
            <div >&nbsp;</div> <!--end planet-->
            <div >&nbsp;</div> <!--end planet-->
            
        </div><!--End Container-->
        
        <!--Include Footer-->
        <?php include 'includes/footer.html';?>
    </body>
</html>