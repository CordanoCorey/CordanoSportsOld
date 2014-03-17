<?php 
    namespace Hype\Plays;
    /*
     * A collection of the best and most popular plays from within a given
     * context of games.
     * 
     * @Package Leagues
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class TopPlays extends Plays implements Trending,Listable
    {
        use ListView;
        use Popular;
        private $plays;
    }
?>