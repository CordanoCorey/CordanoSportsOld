<?php
    namespace Hype\Stats;
    /*
     * Rundown of a playes statlines by game or within a game by
     * game time.
     * 
     * @Package Players
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Statlines extends Stats implements \Listable,\Contributory
    {
        use ListView;
        /*
         * Get generating statline data.
         * 
         * @Return \Stats\Statline[]
         * @Throws ReturnEmptyException
         */
        private function render()
        {
            
        }
        public function addItem()
        {
            
        }
    }
?>