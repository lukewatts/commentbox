<?php
require_once('app/controller.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <title>Shoutbox Test</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <div class="container">
     
            <h1>Shoutbox</h1>
            <?php echo (!empty($output)) ? $output : ''; ?>
             
                <div class="content">
                    
                    <?php display_commentbox(5); ?>
                 
                </div><!--.content-->
            
            </div>

        </div><!--.container-->
        <script src="http://127.0.0.1/cdn/jquery/2.1.3/jquery.min.js"></script>
        <script src="http://127.0.0.1/commentbox/script.js"></script>
    </body>
</html>