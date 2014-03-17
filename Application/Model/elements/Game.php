<?php
namespace application\model\elements;

/**
 * 
 * @package Games
 * @author coreygelbaugh
 * @version 1.0
 */
class Game implements Axiomatic,Contextual,Featurable{
    
    use Properties;
    use SearchContext;
    use RequestContent;
    
    /*
     * @param Hype[]
     */
    protected $hype;
    
    public function __construct($gameInfo,$searchCriteria=NULL,$request=NULL){
        
        //set domain state
        foreach($gameInfo as $key=>$value){
            if(property_exists(get_class($this),$key)){
                $this->$key=$value;
            }
        }
        
        //set application state
        $this->setContext($searchCriteria);
        $this->setContent($request);
    }
    
    public function getHype(){
        
    }
    public function setHype(){
        
    }
    public function getTopic(){
        
    }
    public function setTopic(){
        
    }
}
