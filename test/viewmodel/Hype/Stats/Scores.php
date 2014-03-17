<?php 
    namespace Hype\Stats;
    /*
     * Scores from around a league or from games played by a team.
     * 
     * @Package Stats
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Scores extends Stats implements \Listable,\Contributory,\Live
    {
        use \ListView;
        public $idLeague;
        /*
         * Get generating score data.
         * 
         * @Return \Stats\Score[]
         * @Throws ReturnEmptyException
         */
        private function render()
        {
            
        }
        public function contribute()
        {
            
        }
    }
?>