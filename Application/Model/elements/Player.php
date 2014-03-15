<?php
namespace application\model\elements;


/**
 * Description of Player
 *
 * @author coreygelbaugh
 * @version 1.0
 */
class Player implements Hierarchical,Connectable{
    /*
     * @param string
     */
    public $displayName;
    /*
     * @param array
     */
    public $sports=[];
    /*
     * @param int
     */
    public $idPlayerverse;
    
    /*
     * @param Topic[]
     */
    protected $topics;
    /*
     * @param Hype[]
     */
    protected $hype;
    /*
     * @param Game[]
     */
    protected $games;
    /*
     * @param string[]      An array of player's documented factors.
     */
    public $factors;
    /*
     * @param array     An array of field=value pairs.
     */
    protected $properties;
    use DatabaseConnection;
    
    public function __construct()
    {
        $this->getStatus();
    }
    
    /*
     * 
     */
    public function getStatus()
    {
        
    }
    
    /*
     * 
     */
    public function getState()
    {
        
    }
    
    /*
     * Retrieve entire activity log for this player.
     */
    public function getSource()
    {
        
    }     
}
