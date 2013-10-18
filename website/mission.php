
<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Our mission - CEIP</title>

        <meta name="description" content="Our mission">
         
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
	                Our Mission
	            </header>
	
	            <article>
	            
						<div id="subsection1">
                            <div id='sidebar'>
                                <div class='padding'>
                                    <?php require ($localizer . 'includes/home_sidebar.php'); ?>
                                </div>
                            </div>
                            <div id='content'>
                                <div class='paddingInner'>
                                    <img src="images/ceip.png" alt="ceip" style="width:100%" />
                                    <p>
                                        The mission of CEIP is to bridge the gap between in vitro biomedical research and in vivo imaging. 
                                        This endeavour is approached by both, developing novel imaging technology to answer emerging questions 
                                        in biomedicine and using novel animal models and imaging probes to  gain information about physiology 
                                        and pathology in vivo. A very tight link to private companies actively involved in biomedical field 
                                        ensures a fast transition of the basic research to the patient's bed.
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