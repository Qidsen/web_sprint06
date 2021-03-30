<?php
class Ingestion {
    public $id, $meal_type = array(), $day_of_diet, $products = array();
    public function setProduct($product) {$this->products[$product->getName()] = $product;}
    public function getProducts() {return $this->products;}
    public function get_from_fridge($product) : void {
        foreach ($this->products as $prod)
            if ($prod->name === $product)
                if (($prod->kcal_per_portion) > 200)
                    throw new EatException("No more junk food, dumpling");
    }
}
?>
