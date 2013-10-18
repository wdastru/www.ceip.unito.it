
<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contacts - CEIP</title>
        <meta name="description" content="Contact Us at CEIP">
        
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
		                Contact Us
		            </header>
		
		            <article>
		            
							<div id="subsection3">
	                            <div id='sidebar'>
	                                <div class='padding'>
	                                    <?php require ($localizer . 'includes/home_sidebar.php'); ?>
	                                </div>
	                            </div>
	                            <div id='content'>
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
                                            <table id="contacts_form">
                                                <tr>
                                                    <td id='col1' class="right_align">Name and surname</td>
                                                    <td id='col2'><input class="input_field" type="text" name= "name" value="" /></td>
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
                                                        <input id="button" type="submit" value="Send" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
	                        </div>
	
		            </article>
	            </div>
	
	            <div class="push"></div>
			
        </div>

        <footer>
            <?php
                require ($localizer . 'includes/footer.php');
            ?>
        </footer>

        <script type="text/javascript">
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>

    </body>
</html>