<?php 
    namespace Hype\Stats;
    /*
    * Some sports such as golf and boxing display game statistical outcomes
    * in the form of scorecards. For those sports, this class should be 
    * utilized in place of the box score class.
    * 
    * @Package Stats
    * @Version 1.0
    * @Author Corey Gelbaugh
    */
    Class Scorecard extends Stats implements \Tabular
    {
        use TableView;
    }
?>