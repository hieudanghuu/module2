<?php
function current_millis() {
    list($usec, $sec) = explode(" ", microtime());
    return round(((float)$usec + (float)$sec) * 1000);
}
$started = current_millis();
for($i=0;$i<100000;$i++){
    echo $i;
}
echo "<br>";
echo "We took: " . (current_millis() - $started) . " millis to run";