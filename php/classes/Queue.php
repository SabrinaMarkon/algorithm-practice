<?php
/* A queue if FIFO (first in, first out), much like a lineup in a store. Whoever was in the lineup first is also the person to checkout first. */

class Queue {

    private $queue = []; // array to represent the queue.

    // constructor to initialize the queue we want to use.
    public function __construct($queue) {

        $this->queue = $queue;
    }

    // enqueue. (add to the end of the queue)
    private function enqueue($item) {

        array_push($this->queue,$item);
        return $this->queue;
    }

    // dequeue. (remove the first item from the queue)
    private function dequeue() {

        array_shift($this->queue);
        return $this->queue;
    }

    // peek. (look at the next to the one we are looking at already)
    private function peek($item) {

        // get the current index.
        $current = array_search($item,$this->queue);
        // get the value of the item at one next to the current index.
        // But first, make sure we are not falling off the array!
        // length of the queue array:
        $length = $this->queue->length();

        if ($length > $current) {

            $peek = $this->queue[$current + 1];
        } else {
            $peek = $item . " was the last item in the queue";
        }
        
        return $peek;
    }

    // length. (get the length of the queue)
    private function length() {

        return sizeof($this->queue);
    }

    // isEmpty. (is the queue empty)
    private function isEmpty() {

        return sizeof($this->queue) > 0;
    }

}
