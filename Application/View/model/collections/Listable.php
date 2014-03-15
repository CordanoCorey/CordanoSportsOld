<?php 
namespace application\view\model\collections;
/**
*
* @package View
* @author coreygelbaugh
* @version 1.0
* 
*/
Interface Listable
{
    public function formatRowView();
    public function getRowData();
}