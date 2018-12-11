<?php

class Node {

    private $node;
    private $data = null;
    private $next = null;

    public function __construct($value = false) {

        $this->data = $value;
        $this->next = null;
    }

    public function getNodesData() {

        return $this->data;
    }

}

class LinkedList {

    private $head = null;
    private $tail = null;
    private $length = 0;

    public function push($item) {

        if ($head === null) {

            $this->head = $node;
            $this->tail = $node;
            $this->length++;
            return $node;
        }
        $this->$node = new Node($value);
        $this->tail = $node;
        $this->length++;

        return $node;
    }

    public function pop() {


    }

    public function length() {


    }

    public function isEmpty() {

        return $this->length === 0;
    }

}