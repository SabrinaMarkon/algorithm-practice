<?php
/* stack is LIFO (last in first out), like a stack of plates we always add and remove from the top of the stack. */

class Stack {

    private $stack = [];

    public function __construct(array $stack) {

        $this->stack = $stack;

    }

    public function push($item) {

        array_push($this->stack,$item);
        return $this;

    }

    public function pop() {

        array_pop($this->stack);
        return $this;

    }

    public function length() {

        return sizeof($this->stack);

    }

    public function isEmpty() {

        return sizeof($this->stack) === 0
        ? "Empty"
        : "Not Empty";

    }

    public function getStack() {

        return $this->stack;
    }
}