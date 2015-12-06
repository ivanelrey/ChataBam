<?php
session_start();
?>
<html>
    <head>
        <title></title>   
        <link type="text/css" rel="stylesheet" href="css/chatpage.css">
        <script type="text/javascript" src="js/onEnterSubmitForm.js"></script>
    </head>
    <body>
        
        <div id="wrapper">
            <div id="userinfo">
                <?php
                    echo "<h3>"."Welcome".": ".$_SESSION['username']."</h3>";
                ?>
            </div> 
            <form id="logout" action="logout.php" method="post">
                <input id="logoutbutton" type="submit" value="Log Out" >
            </form>
            <div id="feedback"></div>            
            <div id="messages">                
            </div> 
            <form id="sendmessage" action="#" method="post">
                <textarea id="message" type="text" placeholder="Write message"></textarea>
                <input id="sendmessagebutton" type="submit" value="Send" onkeypress="addInputSubmitEvent()">
            </form>            
        </div>

        
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/refreshChat.js"></script>    
    <script type="text/javascript" src="js/sendMessageToDatabase.js"></script>
    </body>
</html>