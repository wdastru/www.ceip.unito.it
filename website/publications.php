
<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Publications at CEIP</title>
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
	                Publications
	            </header>
	
	            <article>
	            
						<div id="subsection2">
                            <div id='sidebar'>
                                <div class='padding'>
                                    <?php require ($localizer . 'includes/research_sidebar.php'); ?>
                                </div>
                            </div>
                            <div id='content'>
                                <div class='paddingInner'>
                                    <p>
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