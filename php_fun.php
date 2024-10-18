<?php
//-------------------------------strlen-------------------------
// $text="hello world";
// $len=strlen($text);
// echo $len;

//strpos---------------------(case sensitive )-----------------
// $text="this is a test string";
// $pos= strpos($text,"test");
// echo "the word 'test ' starts at position ",$pos;

//-------------------stripos not case sensitive --------------

// $text = "This is a test string.";
// $pos = stripos($text, "Test");
// echo "The word 'Test' starts at position $pos.";

//------------------------------------------------------------
// substr() -This function extracts a substring from a string.
// $text = "Hello, World!";
// $substring = substr($text, 0, 5);
// echo "The first 5 characters are: $substring";

// ----------------------------------------------------------
// $text = "Hello, World!";
// $newText = str_replace("World", "Universe", $text);
// echo "Replaced: $newText";

//------------------------------------------------------------
// $text = "la li la lo lo lo  ";
// $repeatedText = str_repeat($text, 3);
// echo "Repetition: $repeatedText";

//-------------------------------------------------------------
// $text = "hello, world!";
// $capitalized = ucfirst($text);
// echo "Capitalized: $capitalized";

//-------------------------------------------------------------
// $text = "hello, world!";
// $capitalizedWords = ucwords($text);
// echo "Capitalized Words: $capitalizedWords";

//--------------------------------------------------------------
// $text = "Hello, World!";
// $lowercased = lcfirst($text);
// echo "Lowercased: $lowercased";

//---------------------------------------------------------------
// $text = "Hello, World!";
// $uppercase = strtoupper($text);
// echo "Uppercase: $uppercase";
//---------------------------------------------------------------
// $text = "Hello, World!";
// $lowercase = strtolower($text);
// echo "Lowercase: $lowercase"
//---------------------------------------------------------------
// $text = "Hello, World!";
// $reversed = strrev($text);
// echo "Reversed: $reversed"
//--------------strcmp -case sensitive --------------------------
// $string1 = "apple";
// $string2 = "banana"; $result = strcmp($string1, $string2);
// echo "Comparison Result: $result"
//---------------strcase cmp case insensitive--------------------
// $string1 = "apple";
// $string2 = "Apple";
// $result = strcasecmp($string1, $string2);
// echo "Case-Insensitive Comparison Result: $result";
//----------------------str natural case sensitive---------------
// $string1 = "img2.png";
// $string2 = "img10.png";
// $result = strnatcmp($string1, $string2);
// echo "Natural Comparison Result: $result";
//---------------------str case natural insensitive--------------
// $string1 = "IMG2.png";
// $string2 = "img10.png";
// $result = strnatcasecmp($string1, $string2);
// echo "Case-Insensitive Natural Comparison Result: $result"
//-----------------------strstr----------------------------------
// $text = "This is a test string.";
// $substring = strstr($text, "test");
// echo "Found: $substring";
//---------------------------------------------------------------
// $text = "Hello, World!";
// $shuffled = str_shuffle($text);
// echo "Shuffled: $shuffled";
//echo "Shuffled: $shuffled";
//--------------------------------------------------------------
$text = "This is a long ,sentence that. should be wrapped.";
$wrapped = wordwrap($text, 15, "<br>");
echo "Wrapped:<br>$wrapped";


 ?>