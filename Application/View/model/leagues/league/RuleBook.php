<?php 
    namespace application\view\model\leagues\league;
    use application\view\model\collections\TopicsView as TopicsView;
    use application\view\model\Collective as Collective;
    /*
     * A league rule book is the league-specific gameplay ruleset.
     * 
     * @package leagues
     * @version 1.0
     * @author coreygelbaugh
     */
    Class RuleBook extends TopicsView implements Collective
    {
        use Compilation;
    }