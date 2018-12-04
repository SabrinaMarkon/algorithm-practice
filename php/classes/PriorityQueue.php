<?php
/* A queue is FIFO (first in, first out), much like a lineup in a store. Whoever was in the lineup first is also the person to checkout first. 
A PRIORITY queue, is where there are multiple queues, but one gets to add/remove before the other does. Like a fast lineup and slow lineup at 
carnival rides.
*/

class PriorityQueue {

    private $highpriorityqueue = [];
    private $lowpriorityqueue = [];

    public function __construct($priorityqueue) {

        $this->highpriorityqueue = $priorityqueue;
        $this->lowpriorityqueue = $priorityqueue;

    }

    public function enqueue($item) {

        array_unshift($this->priorityqueue,$item);
        return $this->priorityqueue;
    }

    public function dequeue() {
        
        array_pop($this->priorityqueue);
        return $this->priorityqueue;
    }

    public function peek() {

        return $this->priorityqueue[sizeof($this->priorityqueue - 1) ];
    }
    
    public function getLength() {

        return sizeof($this->priorityqueue);
    }
    
    public function isEmpty() {

        return sizeof($this->priorityqueue) === 0;
    }



    
}