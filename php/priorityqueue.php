<?php

include "./classes/PriorityQueue.php";

$existingqueue = ['Nigel','Squeebz','Benji']; // if we want to start out with something in it already.

$priorityqueue = new PriorityQueue($existingqueue,true);

$priorityqueue = $priorityqueue->enqueue('Bean',1); // should result in ['Nigel','Squeebz','Benji','Bean']
echo "<font color=blue>Enqueued Bean:</font> ";
print_r($priorityqueue);
echo "<br><br>";

$priorityqueue = $priorityqueue->dequeue(); // should result in ['Squeebz','Benji','Bean']
echo "<font color=blue>Dequeued Nigel:(</font> ";
print_r($priorityqueue);
echo "<br><br>";

// $nextvalue = $priorityqueue->peek(); // should result in 'Squeebz'
// echo "<font color=blue>First in Line (next to be served):</font> ";
// print($nextvalue);
// echo "<br><br>";

// $length = $priorityqueue->length(); // should result in 3 (was 4 with Nigel before he was dequeued :(
// echo "<font color=blue>Length of Queue Now:</font> ";
// print($length);
// echo "<br><br>";

// $isqueueempty = $priorityqueue->isEmpty(); // should be 1, meaning it is not empty.
// echo "<font color=blue>Is the Queue Empty?:</font> ";
// print($isqueueempty);
// echo "<br><br>"; 

// $priorityqueue = $priorityqueue->dequeue()->dequeue()->dequeue();
// $isqueueempty = $priorityqueue->isEmpty(); // should be 0, meaning it is empty.
// echo "<font color=blue>Is the Queue Empty After 3 Dequeues?:</font> ";
// print($isqueueempty);
// echo "<br><br>";