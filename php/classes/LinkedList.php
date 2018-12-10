<?php

class Node {

    private $node;
    private $data = null;
    private $next = null;

    public function __construct($value) {

        $this->data = $value;
        $this->next = null;
    }

    public function getNodesData() {

        return $this->data;
    }

}

class LinkedList {

    


}