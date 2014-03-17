<?php 
    namespace Hype\Stats;
    /*
     * Current team leaders in each statistical category.
     * 
     * @Package Stats
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Leaderboard extends Stats implements \Listable,\Collaborative,\Derivative
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