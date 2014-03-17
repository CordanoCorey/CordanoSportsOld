<?php 
namespace application\view\model;
/**
*
* @package view
* @author coreygelbaugh
* @version 1.0
* 
*/
interface Listable
{
    public function getRowData();
    public function renderRowView();
}