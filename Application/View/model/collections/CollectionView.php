<?php 
    namespace application\view\model\collections;
    use \application\view\model\Listable as Listable;
    /*
    * Class for displaying collections.
    *
    * @package main
    * @version 1.0
    * @author coreygelbaugh
    */
   class CollectionView implements Listable
   {
       /*
        * @param string|array
        */
       public $context=NULL;
       /*
        * @param string|array
        */
       public $class=NULL;
       /*
        * @param string|array
        */
       public $factor=NULL;
       /*
        * @param CDCollection
        */
       private $model;
       /*
        * @param CDElement[]
        */
       private $data;
       /*
        * @param ElementView[]
        */
       private $rows;
       
       public function __construct($model){
           $this->model=$model;
           $this->getRowData();
       }
       public function getRowData(){
           $this->data = $this->model->filter($this->context,$this->class,$this->factor);
       }
       public function renderRowView(){
           foreach($this->data as $element){
               
           }
       }
      
   }