<?php 
    namespace Hype\Transactions;
    /*
     * History of awards and titles a player has received.
     * 
     * @Package Players
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Accolades extends Transactions implements \Listable,\Viewable,\Collaborative
    {
        use ListView;
        use Overview;
    }
?>