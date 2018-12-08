<?php
/* stack is LIFO (last in first out), like a stack of plates we always add and remove from the top of the stack. */

class Stack {

    private $stack = [];

    public function __construct(array $stack) {

        $this->stack = $stack;

    }

    public function push($item) {

        return array_push($stack,$item);
    }

    public function pop() {

        return array_pop($stack);
    }

    public function length() {

        return sizeof($stack);
    }

    public function isEmpty() {

        return sizeof($stack) === 0
        ? "Empty"
        : "Not Empty";
    }
}