<?php
    namespace application\controller;
    use application\model\elements\leagues\League as League;
    use \application\view\model\collections\LeaguesView as LeaguesView;
    use \application\view\ListView as ListView;
    /*
    * Controller for hype forums.
    * 
    * @package main
    * @author coreygelbaugh
    * @version 1.0
    */
    Class HypeController extends CDController
    {
        public $layout="layouts/home.php";
        public $background="bg-signed-in.jpg";
        public $title="Cordano :: Believe the Hype";
        public $sections=["fantasy","fandom","lifestyle","hallofgame","sportsbook"];
        public $format=["json","scroll"];
    }