<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html>
    <!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
    <head>
        <meta charset="UTF-8">
        <!-- InstanceBeginEditable name="title" -->
        <title>Center of Preclinical Imaging - University of Torino</title>
        <!-- InstanceEndEditable -->
        <!-- InstanceBeginEditable name="meta description" -->
        <meta name="description"
        content="University of Torino. Website of the Center of Preclinical Imaging." />
        <!-- InstanceEndEditable -->
        <meta name="google-site-verification" content="q6BWA8Ypxz6kFHheH3kr6xrFvLXopTTQNMlEEV3vGF0" />
        <meta content="text/html" />
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
                        <div id='header'>CENTER FOR PRECLINICAL IMAGING</div>
                        <!-- InstanceBeginEditable name="subsection opening" -->
                        <div id="subsection0">
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
                                        <p>
                                            CEIP(Center of Exellence in Preclinical Imaging) offers to universities, research centers and companies
                                            know-how and methodologies based on imaging techniques in order to easy and speed up the process of
                                            development of new diagnostic and therapeutics solutions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- subsection closing -->
                        </div>
                        <!-- subsection closing -->
                        <div id='after'></div>
                        <?php require ($localizer . 'includes/footer.php'); ?>
                        <?php require ($localizer . 'includes/validators.php'); ?>
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
