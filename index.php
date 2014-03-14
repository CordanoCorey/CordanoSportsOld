<?php  
    session_start();
    include_once "Template.php";
    include_once "Observer.php";
    include_once "Widget.php";
    include_once "Application/Utilities/Router.php";
    include_once "Application/Utilities/CDRequest.php";
    include_once "Application/Utilities/Registry.php";
    include_once "Application/Controller/CDController.php";
    include_once "Application/Model/Leagues/League.php";
    include_once "Application/ModelView/Listable.php";
    include_once "Application/ModelView/LeaguesView.php";
    include_once "Application/View/CDView.php";
    include_once "Application/View/ListView.php";
    include_once "Application/View/CellView.php";
    
    foreach(glob("Application/*.php") as $filename){
        include_once $filename;
    }
     /* 
    //auto-load class files
    spl_autoload_register(function( $class ) {
        $classFile = str_replace( '\\', DIRECTORY_SEPARATOR, $class );
        $classPI = pathinfo( $classFile );
        $classPath = strtolower( $classPI[ 'dirname' ] );

        include_once( $classPath . DIRECTORY_SEPARATOR . $classPI[ 'filename' ] . '.php' );
      });*/
    
    //load client request
    $router = new Application\Utilities\Router($_GET,$_POST);
    
    //load controller
    $controller = $router->routeRequest();
    
    //update model by calling request action
    $controller->invoke();
    
    //load view
    $view = $controller->processRequest();
    
    //send response to client
    $view->output();
?>