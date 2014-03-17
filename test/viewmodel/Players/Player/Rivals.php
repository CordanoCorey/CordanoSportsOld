<?php 
    namespace Players\Player;
    /*
     * List of rivalries a player has established.
     * 
     * @Package Players
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Rivals extends Rivalries implements \Listable,\Viewable
    {
        use ListView;
        use Overview;
    }
?>