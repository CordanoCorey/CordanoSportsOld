<?php
    namespace \Hype;
    /*
     * Buzz headlines are summaries of news stories that are 140 characters are less.
     * Storylines, subplots, etc.
     * 
     * @Package Hype
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Buzz extends Commentary implements Trending
    {
        use Popular;
    }
?>