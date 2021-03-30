<?php
class Team {
    public $id, $avengers = array();
    public function __construct($id ,$avengers) {$this->id = $id; $this->avengers = $avengers;}
    public function battle($damage) : void {
        foreach($this->avengers as $hero) {
            $hero->hp -= $damage;
        }
    }
    public function calculate_losses($cloned_team) : void {
        $lost = 0;
        foreach($this->avengers as $hero) {
            if ($hero->hp <= 0)
                $lost++;
        }
        if (!$lost) {
            echo("We haven't lost anyone in this battle");
            return;
        }
        echo("In this battle we lost ${lost} Avengers.");
        return;
    }
}
?>
