<?php 
    namespace Hype\Plays;
    /*
     * The play book is a tool utilized by coaches to diagram and collect
     * plays for the teams that they coach.
     * 
     * @package Teams
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class PlayBook extends Plays implements \Collective,\Additive
    {
        use Compilation;
        /*
         * 
         */
        public function __construct($team)
        {
            $this->render();
        }
        /*
         * 
         */
        public function render()
        {
            
        }
    }
?>