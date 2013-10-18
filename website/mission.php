
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