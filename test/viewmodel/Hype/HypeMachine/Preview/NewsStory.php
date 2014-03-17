<?php 
    /*
     * This file consists of site display content that is specific to a single news story.
     */
    namespace News\NewsStory;

    
    /*
     * Class for commentary surrounding a news story.
     * 
     * @Package News
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Commentary extends Commentary\Collection implements Collective
    {
        use Compilation;
    }
?>