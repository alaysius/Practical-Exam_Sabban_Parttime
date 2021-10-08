<?php
$a = "madam";
$b = strrev($a);
 $string_reverse = str_split($b);
 $palin = '';
 foreach($string_reverse as $value)
 {
    $palin.= $value;
	
 }
 print $palin;
 if($a == $palin)
 {
   print "\nPalindrome";   
 }else{
  print "\nNot Palindrome";
 }
?>