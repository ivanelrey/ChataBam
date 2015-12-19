<?php
session_start();
if(!isset($_SESSION['username']))
    header("Location: index.php");
?>

<html>
    <head>
        <title></title>   
        
        <link type="text/css" rel="stylesheet" href="css/chatpage.css">       
    </head>
    <body>  
            <div id="container">
                <div id="chatHeader">
                    <div id="userinfo">
                        <?php
                            echo "<h3>"."Welcome".": ".$_SESSION['username']."</h3>";
                        ?>
                    </div> 
                    <div id="logoutbutton">
                        <form id="logout" action="logout.php" method="post">
                            <input id="" type="submit" value="Log Out" >
                        </form>     
                    </div>                     
                </div>
                
                <div id="chatAndUserBox">
                    <div id="messages">  

                    </div>  
                    <div id="onlineusers"> 
                        
                    </div>
                </div>                
                <div id="chatBottom">
                    <form id="sendmessage" action="" method="post">                            
                        <textarea id="message" type="text" placeholder="Write message"></textarea>                            
                        <input id="sendmessagebutton" type="submit" value="Send" onkeypress="addInputSubmitEvent()">
                    </form> 
                </div>                  
            </div>             
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/refreshChat.js"></script>
    <script type="text/javascript" src="js/refreshUsers.js"></script>
    <script type="text/javascript" src="js/pmOnClick.js"></script>
    <script type="text/javascript" src="js/sendMessageToDatabase.js"></script>
    <script type="text/javascript" src="js/onEnterSubmitForm.js"></script>
    </body>
</html>