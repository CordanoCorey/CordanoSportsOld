<?php  
    session_start();
    include "Template.php";
    include "Observer.php";
    include "Widget.php";
    
    //auto-load class files
    spl_autoload_register(function( $class ) {
        $classFile = str_replace( '\\', DIRECTORY_SEPARATOR, $class );
        $classPI = pathinfo( $classFile );
        $classPath = strtolower( $classPI[ 'dirname' ] );

        include_once( $classPath . DIRECTORY_SEPARATOR . $classPI[ 'filename' ] . '.php' );
      });
    
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