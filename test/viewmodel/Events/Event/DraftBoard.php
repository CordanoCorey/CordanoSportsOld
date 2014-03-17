<?php 
    namespace Events\Event;
   /*
    * A draft board displays round-by-round draft picks by team. When in
    * administrative mode, users can report draft results, make predictions
    * prior to the draft about draft order, or prepare their own draft 
    * boards before a draft they will participate in.
    * 
    * @Package Events
    * @Version 1.0
    * @Author Corey Gelbaugh
    */
    Class DraftBoard extends Transactions implements Tabular
    {
        private $draft;
        use TableView;
    }
?>