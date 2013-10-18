
<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Center for Preclinical Imaging</title>
        <meta name="description" content="Home of CEIP.">
        
        <?php include_once($localizer . 'includes/head_const.php') ?>
        <?php include_once($localizer . 'includes/analyticstracking.php') ?>
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
	                CENTER FOR PRECLINICAL IMAGING
	            </header>
	
	            <article>
	            
						<div id="subsection0">
                            <div id='sidebar'>
                                <div class='padding'>
                                    <?php require ($localizer . 'includes/home_sidebar.php'); ?>
                                </div>
                            </div>
                            <div id='content'>
                                <div class='paddingInner'>
                                    <p>
                                        CEIP(Center of Exellence in Preclinical Imaging) offers to universities, research centers and companies
                                        know-how and methodologies based on imaging techniques in order to easy and speed up the process of
                                        development of new diagnostic and therapeutics solutions.
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