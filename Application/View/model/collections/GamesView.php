<?php 
    namespace application\view\model\collections;
    use application\view\model\Deployable as Deployable;
    /*
     * Class for viewing collections of games.
     * 
     * @package games
     * @version 1.0
     * @author coreygelbaugh
     */
    Class GamesView extends CollectionView implements Deployable
    {
        public $context=NULL;
        public $class="games";
        public $factor=NULL;
    }