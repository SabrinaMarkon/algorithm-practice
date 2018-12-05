<?php
/* A queue is FIFO (first in, first out), much like a lineup in a store. Whoever was in the lineup first is also the person to checkout first. 
A PRIORITY queue, is where there are multiple queues, but one gets to add/remove before the other does. Like a fast lineup and slow lineup at 
carnival rides.
*/

class PriorityQueue {

    private $highpriorityqueue = [];
    private $lowpriorityqueue = [];

    // constructor to initialize the queue we want to use.
    public function __construct($existingqueue,$ishighpriority) {

        $this->ishighpriority = $ishighpriority;
        
       if ($ishighpriority) {

            $this->highpriorityqueue = $existingqueue;
            $this->lowpriorityqueue = [];

       } else {

            $this->highpriorityqueue = [];
            $this->lowpriorityqueue = $existingqueue;

       }

       print_r($this->highpriorityqueue); // Nigel, Squeebz, Benji
       print_r($this->lowpriorityqueue); // nothing yet
    }

    public function enqueue($item,$ishighpriority = false) {
        
        if ($ishighpriority) {

            array_push($this->highpriorityqueue,$item);
        
        } else {

            array_push($this->lowpriorityqueue,$item);
        } 
        
        return $this;        
    }

    // public function dequeue() {
        
    //     if (!$this->highpriorityqueue.isEmpty()) {
            
    //         array_shift($this->highpriorityqueue);
    //         return $this->highpriorityqueue;
            
    //     } 
        
    //     array_shift($this->lowpriorityqueue);
    //     return $this->lowpriorityqueue;
    // }

    // public function peek($item) {


    //     if (!$this->highpriorityqueue.isEmpty()) {
            
    //         return $this->highpriorityqueue[0]; 

    //     }
        
    //     return $this->lowpriorityqueue[0];
    // }
    
    // public function length() {

    //     return sizeof($this->highpriorityqueue) + sizeof($this->lowpriorityqueue);
    // }
    
    // public function isEmpty() {

    //     return $this->highpriorityqueue->isEmpty() && $this->lowpriorityqueue->isEmpty();
    // }
    
}