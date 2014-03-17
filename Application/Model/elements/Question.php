<?php
namespace application\model\elements;

/**
 * Description of Question
 *
 * @package Main
 * @author coreygelbaugh
 * @version 1.0
 */
class Question implements Axiomatic,Contextual{
    /*
     * @param string
     */
    public $searchString;
    /*
     * @param Hype[]
     */
    protected $hype;
    
    
    use Properties;
    
    public function __construct($searchCriteria){
        
        //set element properties
        foreach($searchCriteria as $key=>$value){
            if(property_exists(get_class($this),$key)){
                $this->$key=$value;
            }
        }
        
    }
    
    public function getAlias(){
        
    }
    public function getHype(){
        
    }
    public function setHype(){
        
    }
}
