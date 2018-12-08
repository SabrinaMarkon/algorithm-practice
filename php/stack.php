<?php

include "./classes/Stack.php";

$starting_stack = ['Pikachu','Charmander','Squirtle'];
echo "Starting stack: <pre>" . var_export($starting_stack,true) . "</pre><br><br>";

$stack = new Stack($starting_stack);

// push
$stack->push('Bulbasaur')->push('Snivy')->push('Mudkip')->push('Moltres')->push('Articuno')->push('Zapdos')->push('Hi-Oh');
echo "Push new items onto the stack: " . $stack->length() . "<br>";
echo "Stack now: <pre>" . var_export($stack,true) . "</pre><br><br>";


// pop
$stack->pop()->pop();
echo "Pop items off the stack: " . $stack->length() . "<br>";
echo "Stack now: <pre>" . var_export($stack,true) . "</pre><br>";


// getStack
$newstack = $stack->getStack();
$diff = array_diff($newstack,$starting_stack); // returns items in array1 that aren't in array2. KEYS seem to be kept the same indexes.
echo "Difference between the new stack and the starting stack: <pre>" . var_export($diff,true) . "</pre><br>";

// isEmpty
$empty = $stack->isEmpty();
echo "The stack is " . $empty . "<br><br>";