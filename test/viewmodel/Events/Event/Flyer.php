<?php 
    namespace Events\Event;
    /*
     * Flyers are previews of events that can be distributed to potential 
     * attendees.
     * 
     * @Package Events
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Flyer implements \Displayable
    {
        private $event;
        use Widget;
    }
?>