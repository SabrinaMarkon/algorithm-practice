<?php

include "./classes/Queue.php";

$queue = ['Nigel','Benji','Squeebz'];

$myqueue = new Queue($queue);

$myqueue = $myqueue->enqueue('Bean');

echo $queue;