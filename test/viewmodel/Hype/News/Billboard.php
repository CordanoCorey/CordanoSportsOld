<?php 
    namespace Hype\News;
    /*
     * Billboards contain announcements made from within an application
     * by teams, leagues, sports writers, etc. Some example use cases 
     * include a sports writer advertising a release date or a team announcing
     * open tryouts.
     * 
     * @Package News
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Billboard extends News implements \Listable,\Visual
    {
        use ListView;
        use Gallery;
    }
?>