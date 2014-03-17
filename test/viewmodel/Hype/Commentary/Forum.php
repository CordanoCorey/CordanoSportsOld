<?php
    namespace \Hype;
    /*
     * A forum is a collection of broadcasted opinion content from site users
     * to collectively address a sports question.
     * 
     * @Package Hype
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Forum extends Commentary implements Listable
    {
        use ListView;
    }
?>