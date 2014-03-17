<?php 
    namespace Hype\Stats;
    /*
     * All-time statistical record holders for a team.
     * 
     * @Package Stats
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class RecordHolders extends Stats implements \Listable,\Collaborative,\Derivative
    {
        use \ListView;
        public $idLeague;
        /*
         * Get generating statline data.
         * 
         * @Return \Stats\Statline[]
         * @Throws ReturnEmptyException
         */
        private function render()
        {
            
        }
        public function derive()
        {
            
        }
        public function contribute()
        {
            
        }
    } 
?>