<?php
require 'DBconnection.php';
session_start();

$getGlobalData = $databaseConnection->query("SELECT fromusername,tousername,message FROM globalmessage ORDER BY created DESC");

foreach($getGlobalData as $data)
{      
    if($data['tousername'])
    {
        if($data['tousername']==$_SESSION['username'])
        {    
            echo '<strong>'.$data['fromusername'] .''.'</strong>';
            echo '<strong>'.'-->'.$data['tousername'] .': '.'</strong>';
            echo '<span style="color:#cc00cc">'.$data['message']."</br>"."</br>".'</span>';
        }
        
    }    
    else
    {
        echo '<strong>'.$data['fromusername'] .': '.'</strong>';
        echo $data['message']."</br>"."</br>";
    }
        
}
?>