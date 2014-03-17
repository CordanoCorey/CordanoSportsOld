<?php
    namespace Hype\Stats;
    /*
     * Summary of a player's statistical averages and totals with respect
     * to some set of games.
     * 
     * @Package Players
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class StatSheet extends Stats implements \Tabular,\Editable,\Derivative
    {
        use TableView;
        /*
         * Get generating statline data.
         * 
         * @Return \Stats\Statline[]
         * @Throws ReturnEmptyException
         */
        private function render()
        {
            
        }
        public function edit()
        {
            
        }
        public function derive()
        {
            
        }
    }
?>