<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MRI instrumentation - CEIP</title>
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
	                MRI instrumentation
	            </header>
	
	            <article>
	            
						<div id="subsection1">
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
                                                The Vevo&reg; 2100 system expands the functionality, flexibility and image quality of the Vevo 770
                                                system, operating at frequencies never before achieved with solid-state array transducers.
                                                The system is easy to use, non-invasive and fast, providing extremely high throughput when needed. 
                                                Superior resolution and image uniformity through entire field of view with 30 &micro;m of resolution and 
                                                frame rates in 2D up to 740 fps (for a 4x4 mm field of view).
                                            </li>
                                        </ul>
                                    </p>
                                    <div class="float_left"><img class="microUS_images" src="images/microUS_1.png" alt="microUS 1" /></div>
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