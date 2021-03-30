<?php

class LList implements IteratorAggregate {
    public function __construct() {$this->head = null; $this->size = 0;}
    public function getFirst() {return $this->head->data;}
    public function getLast(){
        if (!$this->head)
            return null;
        $node = $this->head;
        while ($node) {
            if (!$node->next)
                return $node;
            $node = $node->next;
        }
    }
    public function add($value) {
        $node = new LLItem($value);
        $current;
        if ($this->head == null)
            $this->head = $node;
        else {
            $current = $this->head;
            while ($current->next)
                $current = $current->next;
            $current->next = $node;
        }
        $this->size++;
    }
    public function addArr($array) {
        $i = 0;
        while ($array[$i]) {
            $this->add($array[$i]);
            $i++;
        }
    }
    public function remove($value) {
        $current = $this->head;
        $prev = null;

        while ($current != null) {
            if ($current->data === $value) {
                if ($prev == null)
                    $this->head = $current->next;
                else
                    $prev->next = $current->next;
                return $this;
            }
            $prev = $current;
            $current = $current->next;
        }
    }
    public function removeAll($value) {
        $current = $this->head;
        $prev = null;

        while ($current != null) {
            if ($current->data === $value) {
                if ($prev == null)
                    $this->head = $current->next;
                else
                    $prev->next = $current->next;
                $this->size--;
            }
            $prev = $current;
            $current = $current->next;
        }
    }
    public function contains($value) {
        $current = $this->head;

        while ($current != null) {
            if ($current->data === $value) {
                return true;
            }
            $current = $current->next;
        }
        return false;
    }
    public function clear() {
        $current = $this->head;

        while ($current != null) {
            if ($current->data) {
                $this->head = $current->next;
                $this->size--;
            }
            $current = $current->next;
        }
    }
    public function count() {return $this->size;}
    public function toString() {
        $current;
        $str = "";
        if ($this->head != null) {
            $current = $this->head;
            while($current) {
                $str .= $current->data;
                if ($current->next)
                    $str .= ", ";
                $current = $current->next;
            }
        }
        return $str;
    }
    public function toArray(){
        $arr = [];
        $point = $this->head;
        while($point != null){
            array_push($arr,$point->data);
            $point = $point->next;
        }

        return $arr;
    }
    public function getIterator(){
        return new ArrayIterator($this->toArray());
    }
}
