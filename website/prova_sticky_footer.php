
<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HTML5 CSS Sticky Footer</title>

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

        <script type="text/javascript" src="js/html5.js"></script>

    </head>
    <body>

        <div class="wrapper">
            
            <nav>
                <?php
                    require ($localizer . 'includes/main-nav.php');
                ?>
            </nav>

            <header>
                
            </header>

            <article>
                content
            </article>

            <div class="push"></div>

        </div>

        <footer>
            <?php
                require ($localizer . 'includes/footer.php');
            ?>
        </footer>


    </body>
</html>