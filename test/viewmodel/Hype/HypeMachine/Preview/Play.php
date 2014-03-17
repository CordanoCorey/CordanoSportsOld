<?php 
    /*
     * This file consists of site display content that is specific to a single play in a game.
     */
    namespace Plays\Play;

    /*
     * Class for commentary surrounding a play.
     * 
     * @Package Plays
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Commentary extends Commentary\Collection implements Collective
    {
        use Compilation;
    }
?>