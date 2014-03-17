<?php
namespace application\model\elements;

/**
 *
 * @author coreygelbaugh
 */
interface Featurable {
    public function getTopic();
    public function setTopic();
    public function getContext();
    public function setContext();
}
