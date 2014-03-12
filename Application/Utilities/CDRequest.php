<?php
    namespace Application\Utilities;
    /*
     * 
     * 
     * @Package Lib
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
     Class CDRequest
     {
        /*
        * @param User
        */
        protected $user;

        /*
         * @param string
         */
        public $action;
        /*
         * 
         */
        private $sender;
        /*
         * @param bool  Indicator for whether user is logged in.
         */
        public $loggedIn=TRUE;

        public function __construct($getRequest=[],$postRequest=[])
        {
            foreach($getRequest as $key=>$value){ 
                if(property_exists(get_class($this),$key)){
                    $this->$key=$value;
                }
            }
            foreach($postRequest as $key=>$value){ 
                if(property_exists(get_class($this),$key)){
                    $this->$key=$value;
                }
            }
        }
     }
?>