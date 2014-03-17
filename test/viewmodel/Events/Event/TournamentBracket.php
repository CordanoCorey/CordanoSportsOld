<?php 
    namespace Events\Event;
   /*
     * Brackets allow users to view round-by-round tournament results, 
     * report tournament results, or predict tournament results before the
     * tournament.
     * 
     * @Package Events
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class TournamentBracket extends Transactions implements Displayable
    {
        private $tournament;
        use Widget;
    }
?>