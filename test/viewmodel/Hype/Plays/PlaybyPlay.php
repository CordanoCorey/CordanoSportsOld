<?php 
    namespace Hype\Plays;
    /*
     * The collection of plays that occurred in a single game or
     * matchup.
     * 
     * @Package Games
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class PlaybyPlay extends Plays implements RealTime,Listable
    {
        use ListView;
        public $idGame;
        private $plays;
    }
?>