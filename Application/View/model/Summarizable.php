<?php
namespace application\view\model;
/**
 *
 * @package View
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Summarizable {
    public function formatSummary();
    public function getSummaryData();
}
