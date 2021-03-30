<?php
class Ant {
    public $name, $role_in_army, $date_of_entry, $number_of_fights, $number_of_legs;
    public function __construct($name, $role_in_army, $date_of_entry, $number_of_fights, $number_of_legs) {$this->name = $name; $this->role_in_army = $role_in_army; $this->date_of_entry = $date_of_entry; $this->number_of_fights = $number_of_fights; $this->number_of_legs = $number_of_legs;}
    public function __serialize() {return ['name' => $this->name, 'role_in_army' => $this->role_in_army, 'date_of_entry' => $this->date_of_entry, 'number_of_fights' => $this->number_of_fights, 'number_of_legs' => $this->number_of_legs,];}
    public function __wakeup() {error_reporting(0); echo "name: ".$this->name."\nrole_in_army: ".$this->role_in_army."\ndate_of_entry: ".$this->date_of_entry."\nnumber_of_fights: ".$this->number_of_fights."\nnumber_of_legs: ".$this->number_of_legs;}
}
?>
