<?php
/* A queue if FIFO (first in, first out), much like a lineup in a store. Whoever was in the lineup first is also the person to checkout first. */

class Queue {

    //
    private $queue = []; // array to represent the queue.

    // constructor to initialize the queue we want to use.
    public function __construct($queue) {

        $this->queue = $queue;
    }

    // enqueue. (add to the end of the queue)
    public function enqueue($item) {

        array_push($this->queue,$item);
        return $this;
    }

    // dequeue. (remove the first item from the queue)
    public function dequeue() {

        array_shift($this->queue); // note when we remove an item from the start of the queue, the indices are renumbered!!
        return $this;
    }

    // peek. (look at the next to the one we are looking at already)
    public function peek($item) {

        // get the current index.
        $current = array_search($item,$this->queue);

        // get the value of the item at one next to the current index.
        // But first, make sure we are not falling off the array!
        // length of the queue array:
        // $length = $this->queue->length();
        $length = $this->length();

        if ($length > $current) {

            $peek = $this->queue[$current + 1];
        } else {
            $peek = $item . " was the last item in the queue";
        }
        
        return $peek;
    }

    // length. (get the length of the queue)
    public function length() {

        return sizeof($this->queue);
    }

    // isEmpty. (is the queue empty)
    public function isEmpty() {

        return sizeof($this->queue) > 0 ? 'Not Empty' : 'Empty'; // returns the string because just 0 for false prints nothing.
    }

}
