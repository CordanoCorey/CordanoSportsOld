<?php 
    namespace Hype\Plays;
    /*
     * Workouts are collections of drills that can be developed
     * by trainers.
     * 
     * @Package Players
     * @Version 1.0
     * @Author Corey Gelbaugh
     */
    Class Workout extends Plays implements \Listable,\Collaborative
    {
        use ListView;
        private $drills;
        public function __construct()
        {
            $this->getSource();
        }
    }
?>