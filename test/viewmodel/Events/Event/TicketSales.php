<?php 
    namespace Events\Event;
    /*
     * Record of all available and sold tickets to an event.
     * 
     * @Package Events
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class TicketSales extends Transactions implements Listable
    {
        use ListView;
        protected $transactions;
    }
?>