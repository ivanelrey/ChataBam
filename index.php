<?php
require 'sessionUnset.php';
unsetSession();
?>
<html>
    <head>
        <title></title>
        <link type="text/css" rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <form action="logIn.php" method="post" name="">
            <div id='wrapper'>
                <input type="text" id='username' name='username' placeholder="Username">
                <input type="submit" id='login' name='login' value="Log In">
            </div>
        </form>
        <canvas id="a" width="200" height="200">
            This text is displayed if your browser does not support HTML5 Canvas.
        </canvas>
        
    </body>     
</html>