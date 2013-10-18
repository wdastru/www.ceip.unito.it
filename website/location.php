
<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Location - CEIP</title>
        <meta name="description" content="Location of the CEIP">
         
        <?php include_once($localizer . 'includes/head_const.php') ?>
        <?php include_once($localizer . 'includes/analyticstracking.php') ?>    </head>
    <body>

        <div class="wrapper BgdImages">
            <div id='section0'>
                <nav>
        	    	<?php
	                    require ($localizer . 'includes/main-nav.php');
	                ?>
                </nav>
	
	            <header>
	                <!-- Contenuto definito in style.css -->
	                Location
	            </header>
	
	            <article>
	            
						<div id="subsection2">
                            <div id='sidebar'>
                                <div class='padding'>
                                    <?php require ($localizer . 'includes/home_sidebar.php'); ?>
                                </div>
                            </div>
                            <div id='content'>
                                <div class='paddingInner'>
                                    <p>
                                        The CEIP is located at the Bioindustry Park Silvano Fumero (BiPca in Colleretto Giacosa (Torino), 5 minutes from Ivrea. 
                                        Thanks to its geographical position, the Park can be easily reached from all major European cities by car, train and plane.
                                        <br/><br/>
                                        ADDRESS:    Via Ribes 5 , 10010 Colleretto Giacosa (TO) ITALY.
                                    </p>
                                    <br/><br/>
                                    <div style="padding-left: 180px;" ><img src="images/location.png" alt="location" width="450px" /></div>
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