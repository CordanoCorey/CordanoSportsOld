<?php
    session_start();
    //Include view controller class definition
    include_once "API/Controller/Leagues/BoardRoom";
    
    ###INCLUDE PAGE-SPECIFIC STYLE SHEETS HERE###
    
    //Update session info
    $_SESSION["activeController"]="BoardRoom";
    
    //Include API access point to finish processing this request
    include_once "apiAccess.php";
?>

 	