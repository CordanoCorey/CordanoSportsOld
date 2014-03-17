<?php 
    namespace Hype\Showcase;
    /*
     * Collection of tagged or saved photos that reside in the Trophy Room.
     * 
     * @Package Players
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class PhotoAlbum extends Multimedia implements \Visual,\Viewable,\Contributory
    {
        use Gallery;
        use Overview;
    }
?>