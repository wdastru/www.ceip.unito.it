
<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Research at CEIP</title>
        <meta name="description" content="Home of CEIP.">
        
        <?php include_once($localizer . 'includes/head_const.php') ?>
        <?php include_once($localizer . 'includes/analyticstracking.php') ?>
    </head>
    <body>

        <div class="wrapper BgdImages">
            <div id='section3'>
                <nav>
        	    	<?php
	                    require ($localizer . 'includes/main-nav.php');
	                ?>
                </nav>
	
	            <header>
	                <!-- Contenuto definito in style.css --> 
	                Research at CEIP
	            </header>
	
	            <article>
	            
						<div id="subsection0">
                            <div id='sidebar'>
                                <div class='padding'>
                                    <?php require ($localizer . 'includes/research_sidebar.php'); ?>
                                </div>
                            </div>
                            <div id='content'>
                                <div class='paddingInner'>
                                    <p>
                                        <ul>
                                            <li>WHAT MOLECULAR IMAGING IS?</li>
                                            <li>WHAT PRECLINICAL IMAGING IS?</li>
                                        </ul>
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