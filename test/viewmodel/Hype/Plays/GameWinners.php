<?php 
    namespace Hype\Plays;
    /*
     * A collection of only game-winning plays.
     * 
     * @Package Leagues
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class GameWinners extends Plays implements \Listable,\Contributory
    {
        use ListView;
        private $plays;
    }
?>