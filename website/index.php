
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