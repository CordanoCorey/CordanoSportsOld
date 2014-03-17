<?php 
    namespace application\view\model\collections;
    use application\view\model\Deployable as Deployable;
    /*
     * Class for viewing collections of players.
     * 
     * @package players
     * @version 1.0
     * @author coreygelbaugh
     */
    Class PlayersView extends CollectionView implements Deployable
    {
        public $context=NULL;
        public $class="players";
        public $factor=NULL;
    }