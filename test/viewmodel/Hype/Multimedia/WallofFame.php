<?php 
    namespace Hype\Showcase;
    /*
     * Gallery of a player's most coveted multimedia to be displayed
     * in the Trophy Room.
     * 
     * @Package Multimedia
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class WallofFame extends Multimedia implements \Visual,\Visible,\Editable
    {
        use Gallery;
        use Preview;
    }
?>