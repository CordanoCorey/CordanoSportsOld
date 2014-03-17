<?php 
    namespace application\view\model\collections;
    /*
     * Class for viewing collections of games.
     * 
     * @package Games
     * @version 1.0
     * @author coreygelbaugh
     */
    Class GamesView implements Collective,Listable
    {
        /*
         * @param Game[]
         */
        private $games;
        
        public function __construct($games)
        {
            $this->games=$games;
        }
        public function getRowData()
        {
            
        }
        public function renderRowView()
        {
            
        }
    }