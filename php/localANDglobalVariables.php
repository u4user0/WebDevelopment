<html><body><?php
$gVar=56; $x=44;
function func() { echo "calling func(); now.<br>"; echo "I cant access gVar until i use global keyword see code.<br>"; global $gVar; echo "gVar is: $gVar. <br>";
$y=33; echo "I access y bcox its local to my fubction, y is local variable: $y"; }
echo "Var x is accessable bcoz its global: $x. <br>";
func();
?></body></html>
