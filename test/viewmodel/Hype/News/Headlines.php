<?php
    namespace Hype;
    /*
     * Headlines is a collection of top news stories for the given
     * page search criteria. It is a News Report content feed that
     * returns most relevant news headlines within the current context.
     * 
     * @Package Hype
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Headlines extends NewsFeed implements Trending,Listable
    {
        use ListView;
        private $news;
    }
?>