<?php
namespace application\model\elements;

/**
 *
 * @package Main
 * @author coreygelbaugh
 * @version 1.0
 */
interface Axiomatic {
    public function getProperty();
    public function setProperty();
    public function getState();
    public function getStatus();
    public function getSource();
}
