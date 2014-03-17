<?php
    namespace Hype;
    use \News\Collection as News;
    /*
     * A storyline is all news posted within a given topic. It's purpose is
     * to allow users to view a news story's development from start to finish.
     * 
     * @Package Hype
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Storyline implements Trending,Listable
    {
        use ListView;
        private $news;
    }
?>