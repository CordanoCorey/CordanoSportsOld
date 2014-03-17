<?php 
    namespace Events\Event;
    /*
     * Charity Events have an accumulated fund raising total that can
     * be displayed in a progression over time.
     * 
     * @Package Events
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class FundRaising extends Transactions implements RealTime,Listable
    {
        use ListView;
        protected $transactions;
    }
?>