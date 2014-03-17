<?php 
    namespace application\view\model\leagues\league\teams;
    use application\view\model\collections\TeamsView as TeamsView;
    use application\view\model\Tabular as Tabular;
    /*
     * League playoff pictures show the playoff seeding as it
     * stands on the current date (seeding if the season ended 
     * today), along with odds that each team will be seeded at
     * each position. If a field in the table is clicked, the
     * played out scenarios that would lead to that team acquiring
     * that postseason seed are produced.
     * 
     * @package leagues
     * @version 1.0
     * @author coreygelbaugh
     */
    Class PlayoffPicture extends TeamsView implements Tabular
    {
        
    }