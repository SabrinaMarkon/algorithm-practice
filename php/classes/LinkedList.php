<?php

class Node {

    /* need properties to be public so LinkedList class can access them */
    public $data;
    public $next;

    /* construct node with data and pointer to next node */
    public function __construct($value = false) {

        $this->data = $value;
        $this->next = null;
    }

    public function getNodesData() {

        return $this->data;
    }

}

class LinkedList {

    private $head;
    private $tail;
    private $length;

    /* Adds to the end of the linked list */
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

    /* pop the item at the end of the list off */
    public function pop() {

        if ($this->isEmpty()) {

            return null;
        }

        const node = $this->tail;

        if ($this->head === $this->tail) {

            $this->head = null;
            $this->tail = null;
            $this->length--;
            return node;
        }
    }

    /* delete a node */
    public function remove($index) {

        $currentNode = $this->head;


    }

    /* find out how many nodes are in the linked list */
    public function size() {


    }

    public function isEmpty() {

        return $this->length === 0;
    }

}