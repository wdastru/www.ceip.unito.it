<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Optical Imaging instrumentation - CEIP</title>
        <meta name="description" content="Home of CEIP.">
        
        <?php include_once($localizer . 'includes/head_const.php'); ?>
        <?php include_once($localizer . 'includes/analyticstracking.php'); ?>
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
	                Optical Imaging instrumentation
	            </header>
	
	            <article>
	            
						<div id="subsection5">
                            <div id='sidebar'>
                                <div class='padding'>
                                    <?php require ($localizer . 'includes/facilities_sidebar.php'); ?>
                                </div>
                            </div>
                            <div id='content'>
                                <div class='paddingInner'>
                                    <p>
                                        <ul>
                                            <li>
                                            </li>
                                        </ul>
                                    </p>
                                    <div class="float_left"><img class="optical_images" src="images/" alt="optical" /></div>
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