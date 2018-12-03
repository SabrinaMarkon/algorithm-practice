<?php

include "./classes/Queue.php";

$queue = ['Nigel','Benji','Squeebz'];

$queue = new Queue($queue);

$queue = $queue->enqueue('Bean'); // should result in ['Nigel','Benji','Squeebz','Bean']
echo "<font color=blue>Enqueued Bean:</font> ";
print_r($queue);
echo "<br><br>";

$queue = $queue->dequeue(); // should result in ['Benji','Squeebz','Bean']
echo "<font color=blue>Dequeued Nigel:(</font> ";
print_r($queue);
echo "<br><br>";

$nextvalue = $queue->peek('Squeebz'); // should result in 'Bean'
echo "<font color=blue>Next after Squeebz:</font> ";
print($nextvalue);
echo "<br><br>";

$length = $queue->length(); // should result in 3 (was 4 with Nigel before he was dequeued :(
echo "<font color=blue>Length of Queue Now:</font> ";
print($length);
echo "<br><br>";

$isqueueempty = $queue->isEmpty(); // should be 1, meaning it is not empty.
echo "<font color=blue>Is the Queue Empty?:</font> ";
print($isqueueempty);
echo "<br><br>"; 

$queue = $queue->dequeue()->dequeue()->dequeue();
$isqueueempty = $queue->isEmpty(); // should be 0, meaning it is empty.
echo "<font color=blue>Is the Queue Empty After 3 Dequeues?:</font> ";
print($isqueueempty);
echo "<br><br>";