<?php
require_once('commentbox/controller.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Shoutbox Test</title>

    <!-- STYLES -->
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <div class="container">
 
        <h1>Shoutbox</h1>
        
        <?php echo (!empty($output)) ? $output : ''; // Error or Success messages after posting comment ?>
         
            <div class="content">
                
                <?php display_commentbox(5); // Display 5 comments newest first ?>
             
            </div><!--.content-->

    </div><!--.container-->
    
    <!-- SCRIPTS -->
    <script src="jquery-2.1.3.min.js"></script><!-- LOAD YOUR OWN jQUERY HERE -->
    <script src="script.js"></script>
</body>
</html>