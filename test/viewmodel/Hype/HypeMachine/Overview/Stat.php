<?php 
    namespace Stats\Statline;
    use Multimedia\Collection as Multimedia;
    /*
     * Video profile of all plays that contributed to this statline.
     * 
     * @Package Stats
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class VideoBoxScore extends Multimedia
    {
        use Gallery;
    } 
    /*
     * Class for commentary surrounding a statline.
     * 
     * @Package Stats
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Commentary extends Commentary\Collection implements Collective
    {
        use Compilation;
    }
?>