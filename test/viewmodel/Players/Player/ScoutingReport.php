<?php
    namespace Players\Player;
    /*
     * Formatted display profiling a player's on-court/field playing style.
     * 
     * @Package Players
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class ScoutingReport implements \Displayable,\Replicable
    {
        use \Widget;
        public $player;
        /*
         * Get generating scouting data.
         * 
         * @Return \Stats\Score[]
         * @Throws ReturnEmptyException
         */
        private function render()
        {
            
        }
        public function replicate()
        {
            
        }
    }
?>