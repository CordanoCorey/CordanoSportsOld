<?php
    namespace application\view\model\topic\venue;
    use \application\view\model\collections\EventsView as EventsView;
    /*
     * Rundown of all events at a venue.
     * 
     * @package venues
     * @version 1.0
     * @author coreygelbaugh
     */
    Class EventLog extends EventsView
    {
        public $context="venue";
        public $class="events";
        public $factor=NULL;
    }
?>