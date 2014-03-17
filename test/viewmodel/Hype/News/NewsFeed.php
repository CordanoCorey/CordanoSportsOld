<?php
    namespace Hype;
    /*
     * A user's news feed includes all posted site content that has been
     * made visible to the user.
     * 
     * @Package Hype
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class NewsFeed extends News implements Listable
    {
        use ListView;
        private $news;
    }
?>