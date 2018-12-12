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

        // this linked list is already empty.
        if ($this->isEmpty()) {

            return null;

        }

        // if there are any nodes, we will return the tail node.
        $node = $this->tail;
        
        // this linked list only had one node so tail and head are the same node.
        if ($this->head === $this->tail) {

            $this->head = null;
            $this->tail = null;
            $this->length--;

            return $node;

        }

        /* remove the tail from the linked list, then change the second-to-last node's 
        next value to null, then change the second-to-last node itself to be the tail. This is
        the inefficiency of linked lists, because to find a node, such as the second-to-last, we have
        to go through the linked list node by node until we find it O(n) */
        
        // SO:
        $current = $this->head; // the one we are looking at for this iteration in the loop.
        $secondtolast; // the second-to-last node in the linked list.

        while ($current) {

            if ($current->next === $this->tail) {

                // means we know we are on the second-to-last "penultimate" node, because
                // the next one is the tail. 
                // Assign the current node we are on in the loop to the secondtolast variable.
                $secondtolast = $current;

                break;

            }

            // if we aren't at the secondtolast node (because the current node's next property isnt
            // the tail), we move on to check the next node in the linked list from the one we're on
            // by moving our pointer to assign the next node to current.
            $current = $current->next;

        }

        // set secondtolast.next to null as we are deleting the tail (its 'next' node)
        $secondtolast->next = null;

        // remove old tail by changing the tail to the secondtolast node.
        $this->tail = $secondtolast;

        // decrement the length of the linked list.
        $this->length--;

        return $node; // old tail node (???) why are we returning this?? Figure out.

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