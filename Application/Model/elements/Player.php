<?php
namespace application\model\elements;


/**
 * Description of Player
 *
 * @package Players
 * @author coreygelbaugh
 * @version 1.0
 */
class Player implements Axiomatic{
    /*
     * @param string[]      An array of player's documented factors.
     */
    public $factors;
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
     * @param int
     */
    public $idPlayer;
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
    use Properties;
    
    public function __construct()
    {
        $this->getStatus();
    }    
}
