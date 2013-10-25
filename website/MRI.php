
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
                                            <li>A 1 T equipped with specific coils for small animals and high throughput screening, with a silent "whisper" gradients and no fringe magnetic fields and Eddy currents; optimal field for paramagnetic  diagnostic agents and good spatial resolution (100 mm).</li>
                                            <li>A 3 T system with a horizontal magnet (31 cm bore) equipped with two gradient bores; strength >200 mT/m and > 400 mT/m at 200A; two transmitter and receiver channels for <sup>1</sup>H, <sup>13</sup>C, and <sup>18</sup>F imaging, two transmit and surface coils for brain and cardiac imaging of small and large animals.</li>
                                            <li>A 7 T MR system with one gradient bore; strength 300 mT/m , RF coils mice and rats whole body, cardiac and respiratory gating.</li>
                                        </ul>
                                    </p>
                                    <div class="float_left"><img class="MRI_images" src="images/MRI_1.jpg" alt="MRI 1" /></div>
                                    <div class="float_left"><img class="MRI_images" src="images/MRI_2.jpg" alt="MRI 2" /></div>
                                    <div><img class="MRI_images" src="images/MRI_3.jpg" alt="MRI 3" /></div>
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