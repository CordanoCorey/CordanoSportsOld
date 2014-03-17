<?php 
    namespace Games;
    /*
     * Rundown of all games in an event, all games played at a venue,
     * or all games played by a given player.
     * 
     * @Package Events
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class GameLog extends Games implements Listable
    {
        use Listview;
    }
?>