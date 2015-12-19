<?php
require 'sessionUnset.php';
session_start();
if(isset($_SESSION['username']))
{
    unsetSession();
    header("Location: index.php");
}
else
{
   
}
