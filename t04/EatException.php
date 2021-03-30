<?php
class EatException extends Error{
    public function __construct($message) {parent::__construct($message); $this->name = "";}
}
?>
