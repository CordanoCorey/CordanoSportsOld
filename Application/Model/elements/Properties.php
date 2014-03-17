<?php
namespace application\model\elements;


/**
 * 
 *
 * @package Main
 * @author coreygelbaugh
 * @version 1.0
 */
trait Properties{
    /*
     * @param CDRepo
     */
    protected $CDRepo;
    /*
     * @param int[]
     */
    protected $state;
    /*
     * @param int[]
     */
    protected $status;
    /*
     * @param int[]
     */
    protected $source;
    /*
     * 
     */
    public function setProperty($sender,$propertyName,$property){
        
    }
    /*
     * 
     */
    public function getProperty($sender,$propertyName){
        
    }
    /*
     * 
     */
    public function getState(){
        return $this->state();
    }
    /*
     * 
     */
    public function getStatus(){
        return $this->status();
    }
    /*
     * Retrieve entire activity log for this element.
     */
    public function getSource(){
        return $this->source();
    }
}
