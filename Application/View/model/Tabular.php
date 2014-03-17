<?php
namespace application\view\model;
/**
 *
 * @package View
 * @author coreygelbaugh
 * @version 1.0
 * 
 */
interface Tabular {
    public function getColumnData();
    public function renderColumnView();
}
