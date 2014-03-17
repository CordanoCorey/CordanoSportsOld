<?php
namespace application\model\elements;

/**
 * 
 * @package Main
 * @author coreygelbaugh
 * @version 1.0
 */
class Answer implements Axiomatic,Featurable {
    use Properties;
    
    public function __construct($searchCriteria){
        
        //set element properties
        foreach($searchCriteria as $key=>$value){
            if(property_exists(get_class($this),$key)){
                $this->$key=$value;
            }
        }
        
    }
}
