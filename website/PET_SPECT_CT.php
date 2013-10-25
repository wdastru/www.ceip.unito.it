<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PET/SPECT/CT instrumentation - CEIP</title>
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
	            
						<div id="subsection2">
                            <div id='sidebar'>
                                <div class='padding'>
                                    <?php require ($localizer . 'includes/facilities_sidebar.php'); ?>
                                </div>
                            </div>
                            <div id='content'>
                                <div class='paddingInner'>
                                    <p>
                                        <ul>
                                            <li>Triumph GE is a fully integrated molecular imaging system PET/SPEC/CT for biomedical research and pharmaceutical development. Equipment providing high quality images and data for optimal resolution, contrast, noise-to-image quality and accurate 3D rendering with minimal x-ray dose.</li>
                                            <li>YAP-(S)PET Scanner provides a simple tool for Multimode Functional Imaging on Small Animals . The Scanner can be easily configured to perform studies either in PET or SPECT mode. The 4-head version of the scanner may work simultaneously in PET and SPECT mode.</li>
                                            <li>The in-house availability of a cyclotron for industrial production of clinical and research tracers provides both PET/SPECT agents and custom labeling of candidate molecules for pre-clinical studies.</li>
                                        </ul>
                                    </p>
                                    <div class="float_left"><img class="PET_SPECT_CT_images" src="images/PET_SPECT_CT_1.jpg" alt="PET_SPECT_CT 1" /></div>
                                    <div><img class="PET_SPECT_CT_images" src="images/PET_SPECT_CT_2.jpg" alt="PET_SPECT_CT 2" /></div>
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