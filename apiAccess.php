<?php
    session_start();
    
    //Include api classes
    foreach (glob("../API/*.php") as $filename)
    {
        include_once $filename;
    }
    
    //Check whether the user agent is a mobile device.
    $_SESSION["userAgent"]=Library::getUserAgent();
    
    if($_SESSION["userAgent"]->isMobile()){
        //Retrieve posted JSON object
        $postedJson = file_get_contents('php://input');
        //Decode JSON request into associative PHP array
        $postRequest=json_decode($postedJson,true);
    }
    else{
        //Get PHP form post data
        $postRequest=(isset($_POST))?$_POST:NULL;
    }
    
    //Check for url parameters
    $getRequest=(isset($_GET))?$_GET:NULL;
    
    //Reload the active view controller instance if it's already loaded, otherwise load new view controller singleton
    if(isset($_SESSION["activeController"])){
        $controller=$_SESSION["activeController"];
        $_SESSION[$controller]=isset($_SESSION[$controller])?$_SESSION[$controller]->reloadData($getRequest,$postRequest):new $_SESSION[$controller]($getRequest,$postRequest);
    }
?>
