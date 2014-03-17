<?php 
    namespace Hype\Plays;
    /*
     * A collection of only those plays that added to the point
     * total for the game in question.
     * 
     * @Package Leagues
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class ScoringPlays extends Plays implements \Listable,\Contributory
    {
        use ListView;
        private $plays;
    }
?>