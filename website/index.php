<?php
$localizer = "./";
?>

<!DOCTYPE html>
<head>
    <title></title>
    <link href="stylesheet.css" rel='stylesheet' type='text/css' />
</head>
<body>
    <nav>
        <?php
            require ($localizer . 'includes/main-nav.php'); 
        ?>
    </nav>
    <article>  
        <div class="repeatingBgImage">
            <div class="BgImage1">
                <div class="BgImage2">
                    <div id='section0'>
                        
                        <div id='header'>CENTER FOR PRECLINICAL IMAGING</div>
                        <div id="subsection0">
                            <div id='sidebar'>
                                <div class='padding'>
                                    <?php
                                    require ($localizer . 'includes/home_sidebar.php');
                                    ?>
                                </div>
                            </div>
                            <div id='content'>
                                <div class='paddingOuter'>
                                    <div class='paddingInner'>
                                        <p>
                                            CEIP(Center of Exellence in Preclinical Imaging) offers to universities, research centers and companies
                                            know-how and methodologies based on imaging techniques in order to easy and speed up the process of
                                            development of new diagnostic and therapeutics solutions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                               
    </article>
    <footer>
        <?php
            require ($localizer . 'includes/footer.php');
        ?>
    </footer>
</body>
</html>


<!--

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Center of Preclinical Imaging - University of Torino</title>
        <meta name="description"
        content="University of Torino. Website of the Center of Preclinical Imaging." />
        <meta name="google-site-verification" content="q6BWA8Ypxz6kFHheH3kr6xrFvLXopTTQNMlEEV3vGF0" />
        <meta name="keywords"
        content="NMR, MRI, Imaging Molecolare, Molecular Imaging, Molecular, Imaging, Hyperpolarization, Liposomes, Targeting, Contrast Agents, Positron Emission Tomography, PET, microPET, Diagnostic Imaging, Optical Imaging, CEIP, Torino, Italy, Liposomi, risonanza, magnetica, Italia" />
        <link href="stylesheet.css" rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="script.js"></script>
        <?php include_once($localizer . 'includes/analyticstracking.php') ?>
    </head>
    
    <body>
        <div class="repeatingBgImage">
            <div class="BgImage1">
                <div class="BgImage2">
                    
                </div>
            </div>
        </div>
        <script type="text/javascript">
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>
    </body>
</html> 
-->
