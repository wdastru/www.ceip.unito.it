
<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Partners - CEIP</title>
        <meta name="description" content="Team.">
        
        <?php include_once($localizer . 'includes/head_const.php') ?>
        <?php include_once($localizer . 'includes/analyticstracking.php') ?>
    </head>
    <body>

        <div class="wrapper BgdImages">
            <div id='section1'>
                <nav>
        	    	<?php
	                    require ($localizer . 'includes/main-nav.php');
	                ?>
                </nav>
	
	            <header>
	                <!-- Contenuto definito in style.css --> 
	                Partners
	            </header>
	
	            <article>
	            
						<div id="subsection2">
                            <div id='sidebar'>
                                <div class='padding'>
                                    <?php require ($localizer . 'includes/team_sidebar.php'); ?>
                                </div>
                            </div>
                            <div id='content'>
                                <div class='paddingInner'>
                                    <div style="margin-top: 100px">
                                        <div style="float: left"><img src="images/Bracco.jpg" /></div>
                                        <div style="float: left; margin-left: 60px; margin-top: 5px"><img src="images/AAA.jpg" /></div>
                                        <div style="float: right; margin-top: 25px"><img src="images/Eforan.png" /></div>
                                    </div>
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