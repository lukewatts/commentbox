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
                    
                    <?php display_commentbox(8); ?>
                
                    <form action="" method="post">
                        <h2>Shout! Let it all out!</h2>
                        <div class="fname">
                            <label for="name">Name: </label>
                            <input id="name" name="name" type="text" cols="20" />
                        </div>
                        <div class="femail">
                            <label for="email">Email: </label>
                            <input id="email" name="email" type="text" cols="20" />
                        </div>
                        <textarea name="comment" rows="5" cols="40"></textarea>
                        <input name="send" type="hidden" />
                        <p><input type="submit" value="send" /></p>
                    </form>
                 
                </div><!--.content-->
            
            </div>

        </div><!--.container-->
    </body>
</html>