<?php
    namespace Players\Player;
    /*
     * A player card is an overview of the most relevant player details
     * within the current scope.
     * 
     * @Package Players
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class PlayerCard implements \Displayable,\Editable
    {
        use \Widget;
        public $player;
        
        /*
         * Get generating player data.
         * 
         * @Return \Stats\Score[]
         * @Throws ReturnEmptyException
         */
        private function render()
        {
            
        }
    }
?>