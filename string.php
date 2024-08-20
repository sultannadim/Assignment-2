<?php

$strings = ["Hello", "World", "PHP", "Programming"];
$vowels = ['a', 'e', 'i', 'o', 'u'];

foreach($strings as $string){
    $rev = strrev($string);
    $count = 0;

foreach ($vowels as $vowel) {
    $count += substr_count(strtolower($string), $vowel);
}
    echo "Original String: {$string}, Vowel Count: {$count}, Reversed String: {$rev} <br> <br>";
}

?>