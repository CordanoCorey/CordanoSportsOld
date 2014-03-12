<?php
    namespace Application\View;
    /*
     * Class for displaying simple cell views. Any class that utilizes this view 
     * adheres to the Cellular protocol. 
     * 
     * @Package View
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class CellView
    {
        public $name;
        public $status;
        
        public function __construct($cell)
        {
            foreach($cell as $key=>$value){ 
                if(property_exists(get_class($this),$key)){
                    $this->$key=$value;
                }
            }
        }
        public function render()
        {
            return \Template::cellView($this);
        }
    }
?>