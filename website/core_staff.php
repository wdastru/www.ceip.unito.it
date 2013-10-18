
<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Core Staff - CEIP</title>
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
	                Core Staff
	            </header>
	
	            <article>
	            
						<div id="subsection1">
                            <div id='sidebar'>
                                <div class='padding'>
                                    <?php require ($localizer . 'includes/team_sidebar.php'); ?>
                                </div>
                            </div>
                            <div id='content'>
                                <div class='paddingInner'>
                                    <div style="float: left">
                                    <img src="images/Terreno.png" alt="Enzo Terreno" />
                                    </div>
                                    <div style="float: right">
                                        Prof. ENZO TERRENO
                                        <br/>
                                        Associate Professor and Scientific Director of the Center of Preclinical Imaging
                                        <br/>
                                        Academy-Industry Joint Laboratory
                                        <br/>
                                        Tel.: +39-0125-538942 (then digit 522)
                                        <br/>
                                        Fax: +39-0125-538664
                                        <br/>
                                        Email:  enzo.terreno@unito.it
                                        <br/>
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