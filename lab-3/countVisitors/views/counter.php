<?php

$obj = new Counter();
$obj->increment_and_update();
$count = $obj->getCount();

echo "<h1> your are the visitor number =  $count </h1>" ;