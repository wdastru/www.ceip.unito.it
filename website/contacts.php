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
    </head>
    <body>
        <?php include_once($localizer . 'includes/analyticstracking.php') ?>

        <div class="repeatingBgImage">
            <div class="BgImage1">
                <div class="BgImage2">
                    <div id='section0'>
                        <?php
                        require ($localizer . 'includes/main-nav.php');
                        ?>
                        <div id='header'>Contact Us</div>
                        <!-- InstanceBeginEditable name="subsection opening" -->
                        <div id="subsection3">
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
                                        <div style="float: left; width: 250px;">
                                            <p>
                                                CEIP : Center for Preclinical Imaging
                                                <br/>
                                                Via Ribes 5
                                                <br/>
                                                10010 Colleretto Giacosa
                                                <br/>
                                                TORINO-ITALY
                                                <br/>
                                            </p>
                                        </div>
                                        <div>
                                            <p>
                                                Tel:  +300125538942-522
                                                <br/>
                                                Fax: +390125538664
                                                <br/>
                                                Email:  
                                            </p>
                                        </div>
                                        
                                        <br/>
                                        <br/>
                                        <p style="text-align: center"><strong>Request form</strong></p>
                                        <form>
                                            <table>
                                                <tr>
                                                    <td class="right_align">Name and surname</td>
                                                    <td><input class="input_field" type="text" name= "name" value="" /></td>
                                                </tr>
                                                <tr>
                                                    <td class="right_align">Company</td>
                                                    <td><input class="input_field" type="text" name= "company" value="" /></td>
                                                </tr>
                                                <tr>
                                                    <td class="right_align">Email address</td>
                                                    <td><input class="input_field" type="text" name= "email" value="" /></td>
                                                </tr>
                                                <tr>
                                                    <td class="right_align">Telephone number</td>
                                                    <td><input class="input_field" type="text" name= "tel" value="" /></td>
                                                </tr>
                                                <tr>
                                                    <td class="right_align">Text</td>
                                                    <td>
                                                        <input type="hidden" name="text">
                                                        <textarea class="textarea_field" name="text" rows="10"></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="text-align: center">
                                                        <input type="submit" value="Send" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
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
