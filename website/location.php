
<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Center for Preclinical Imaging</title>

        <meta name="description" content="The original and simplest sticky footer CSS modified for HTML5.">

        <!--
        The second stylesheet is to make things look pretty.
        The first one is only the important one.
        -->

        <link rel="stylesheet" type="text/css" media="screen" href="layout.css">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css">
        
        <!--
        Include the following JavaScript file so older browsers can render the HTML5 elements properly
        -->

        <script type="text/javascript" src="html5.js"></script>
        <script type="text/javascript" src="script.js"></script>

    </head>
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