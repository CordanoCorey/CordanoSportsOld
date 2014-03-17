<?php
    namespace Hype\Stats;
    /*
     * Rundown of all player numerical measurements that do not represent
     * game results (e.g. height, weight, 40 yard dash time, etc.)
     * 
     * @Package Players
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Dimensions extends Stats implements \Listable,\Visible,\Collaborative
    {
        use ListView;
        use Preview;
    }
?>