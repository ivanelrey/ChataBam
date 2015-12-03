<?php
session_start();
?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>ChataBam</title>
    
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">   
    
  </head>

  <body>

    
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div>
<div class="form">
    <h2>Welcome <label></label></h2>
    <div id="globalMessages">  
            
    </div>     
    <div id="input">
            <div id="feedback"></div>
            <form action="#" method="post" id="form_input">               
                <label>Enter Message: <input type="text" name="message" id="message"/> </label>
                <input type="submit" name="send" id="send" value="Send">                
            </form>
    </div>
  </div>
  <div class="form">
    <h2>Need Help?</h2>
    <form>      
      <button>Info</button>
    </form>
  </div> 
</div>



    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='js/da0415260bc83974687e3f9ae.js'></script>
    <script src="js/index.js"></script>
  </body>
</html>
