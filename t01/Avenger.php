<?php
class Avenger {
    public $name, $alias, $gender, $age, $power = array();
    public function __construct($name, $alias, $gender, $age, $power) {$this->name = $name; $this->alias = $alias; $this->gender = $gender; $this->age = $age; $this->power = $power;}
    public function __toString() {return "name: ".$this->name."\n"."gender: ".$this->gender."\n"."age: ".$this->age."\n";}
    public function __invoke() {$str = ""; $str = strtoupper($this->alias)."\n"; foreach($this->power as $ability) $str.=$ability."\n"; echo $str."\n";}
}
?>
