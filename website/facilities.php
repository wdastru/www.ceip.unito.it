
<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Facilities - CEIP</title>
        <meta name="description" content="Home of CEIP.">
        
        <?php include_once($localizer . 'includes/head_const.php') ?>
        <?php include_once($localizer . 'includes/analyticstracking.php') ?>
    </head>
    <body>

        <div class="wrapper BgdImages">
            <div id='section2'>
                <nav>
        	    	<?php
	                    require ($localizer . 'includes/main-nav.php');
	                ?>
                </nav>
	
	            <header>
	                <!-- Contenuto definito in style.css --> 
	                Facilities
	            </header>
	
	            <article>
	            
						<div id="subsection0">
                            <div id='sidebar'>
                                <div class='padding'>
                                    <?php require ($localizer . 'includes/facilities_sidebar.php'); ?>
                                </div>
                            </div>
                            <div id='content'>
                                <div class='paddingInner'>
                                    <p>
                                        Many facilities are available in our center and the imaging team specifically provides for a complete service including the set up of the service, 
                                        instrumentation  and animal models. The Center is equipped, directly and indirectly, with different imaging technologies such us MRI, nuclear 
                                        medicine tech, X-ray, optical imaging, ultrasound , PET-SPECT and it is coupled in a synergic way with facilities and labs of different other 
                                        companies located in Bioindustry Park area.
                                    </p>
                                </div>
                            </div>
                        </div>

	            </article>
            </div>

            <div class="push"></div>
        </div>

        <footer>
            <div class="BgImage1">
                <?php
                    require ($localizer . 'includes/footer.php');
                ?>
            </div>
        </footer>

        <script type="text/javascript">
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>

    </body>
</html>