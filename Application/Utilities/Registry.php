<?php
    namespace Application\Utilities;
    /*
     * This class is responsible for completely specifying the dynamic
     * structure of the site of the site for quick reference purposes so 
     * that we do not have to access the database to know which navigation 
     * options to display.
     * 
     * @Package Main
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Registry
    {
        /*
         * @param array
         */
        public $nav=[];
        
        public function __construct($call)
        {
            $this->nav=$this->$call();
        }
        public function mainController($navElement=NULL)
        {
            $layout="home.php";
            $title="Cordano :: Believe the Hype";
            $background="background-image:url(images/bg-signed-in.jpg)";
            $views=["Hype","Leagues","Teams","Players","Games"];
            $feature=NULL;
            $featureApp="Hype Machine";
            $apps=["Hype Machine","League Manager","Team Builder", "Player Developer", "Game Day"];
            
            if($navElement){
                return $$navElement;
            }
            else{
                return [
                    "layout"=>$layout,
                    "background"=>$background,
                    "title"=>$title,
                    "views"=>$views,
                    "feature"=>$feature,
                    "featureApp"=>$featureApp,
                    "apps"=>$apps
                ];
            }
        }
        
        public function leagueController($navElement=NULL)
        {
            $layout="league.php";
            $views=["League","Teams","Players","Games"];
            $feature="Board Room";
            $featureApp="League Manager";
            
            if($navElement){
                return $$navElement;
            }
            else{
                return [
                    "layout"=>$layout,
                    "views"=>$views,
                    "feature"=>$feature,
                    "featureApp"=>$featureApp
                ];
            }
        }
    }
?>