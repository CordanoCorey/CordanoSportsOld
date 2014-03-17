<?php 
    namespace Games;
    /*
     * Every team and league has an instance of the schedule class as an attribute.
     * Schedules display all games scheduled for a team or within a league.
     * 
     * @Package Games
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Schedule extends Games implements Listable
    {
        use ListView;
    }
?>