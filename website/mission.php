<?php
$localizer = "./";
?>
<!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
    <head>
        <meta name="generator"
        content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org" />
        <!-- InstanceBeginEditable name="title" -->
        <title>Center of Preclinical Imaging - University of Torino</title>
        <!-- InstanceEndEditable -->
        <!-- InstanceBeginEditable name="meta description" -->
        <meta name="description"
        content="University of Torino. Website of the Center of Preclinical Imaging." />
        <!-- InstanceEndEditable -->
        <meta name="google-site-verification"
        content="q6BWA8Ypxz6kFHheH3kr6xrFvLXopTTQNMlEEV3vGF0" />
        <meta http-equiv="Content-Type" content="text/php; charset=us-ascii" />
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
                    <div id='section0'>
                        <?php
                        require ($localizer . 'includes/main-nav.php');
                        ?>
                        <div id='header'>CEIP Mission</div>
                        <!-- InstanceBeginEditable name="subsection opening" -->
                        <div id="subsection1">
                            <!-- InstanceEndEditable -->
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
                                        <img src="images/ceip.png" alt="ceip" style="width:100%" />
                                        <p>
                                            The mission of CEIP is to bridge the gap between in vitro biomedical research and in vivo imaging. 
                                            This endeavour is approached by both, developing novel imaging technology to answer emerging questions 
                                            in biomedicine and using novel animal models and imaging probes to  gain information about physiology 
                                            and pathology in vivo. A very tight link to private companies actively involved in biomedical field 
                                            ensures a fast transition of the basic research to the patient's bed.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- subsection closing -->
                        </div>
                        <!-- subsection closing -->
                        <div id='after'></div>
                        <?php
                            require ($localizer . 'includes/footer.php');
                        ?>
                        <?php
                            require ($localizer . 'includes/validators.php');
                        ?>
                        <!-- section closing -->
                    </div>
                </div>
            </div>
        </div>
        <!-- section closing -->
        <script type="text/javascript">
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>
        <!-- InstanceEnd -->
    </body>
</html>
