#!/usr/local/bin/php
<?php
//print "$argc arguments were passed. In order: \n";

for ($i = 0; $i <= $argc -1; ++$i) {
//    print "$i: $argv[$i]\n";
}
$number= $argv[1];
//count($array)
$array = file('players.txt', FILE_SKIP_EMPTY_LINES);
for ($i=0;$i<$number;$i++){
    print $array[$i];
}


?>


