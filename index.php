<?php  
    session_start();
    include_once "CDTemplate.php";
    include_once "observer.php";
    include_once "CDWidget.php";
    include_once "application/utilities/Router.php";
    include_once "application/utilities/CDRequest.php";
    include_once "application/utilities/Registry.php";
    include_once "application/controller/CDController.php";
    include_once "application/model/Leagues/League.php";
    include_once "application/view/model/Listable.php";
    include_once "application/view/model/LeaguesView.php";
    include_once "application/view/CDView.php";
    include_once "application/view/ListView.php";
    include_once "application/view/CellView.php";
    /*
    foreach(glob("Application/*.php") as $filename){
        include_once $filename;
    }
    //auto-load class files
    spl_autoload_register(function( $class ) {
        $classFile = str_replace( '\\', DIRECTORY_SEPARATOR, $class );
        $classPI = pathinfo( $classFile );
        $classPath = strtolower( $classPI[ 'dirname' ] );

        include_once( $classPath . DIRECTORY_SEPARATOR . $classPI[ 'filename' ] . '.php' );
      });*/
    
    //load client request
    $router = new application\utilities\Router($_GET,$_POST);
    
    //load controller
    $controller = $router->routeRequest();
    
    //update model by calling request action
    $controller->invoke();
    
    //load view
    $view = $controller->processRequest();
    
    //send response to client
    $view->output();
?>