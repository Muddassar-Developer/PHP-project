<?php
$str = "Hello World";
echo $str ."<br>";
$len = strlen($str);
echo "This lenth of the string is ". $len. "  Thank You <br>";
echo "The number of word in this string is ". str_word_count($str) . "  Thank You <br>";
echo "The revers string is ". strrev($str) . "  Thank You <br>";
echo "The search for world in this string is ". strpos($str, "World") . "  Thank You <br>";
echo "The replace string is ". str_replace("Hello","Hi", $str) . "  Thank You <br>";


?>