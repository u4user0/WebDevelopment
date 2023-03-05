<html><body><h1>Important functions.</h1>
<p>Print Array: print_r(Name of array);</p><hr>
<p>Print Array with its DataType: var_dump(Name of array);</p><hr>
<p>2Types of array in PHP, index and Associative Array.</p><hr>
<?php
// Declare array way1.
$myArray=array("RED",54,"GREEN","BLUE");
// Declare array way2.
$myArray2=["abc", "def"];
echo $myArray[0]." ".$myArray[1]." ".$myArray[2]." ".$myArray[4]."<br>";
echo "<pre>";
print_r($myArray); //Print array.
echo "</pre>";
echo $myArray2[0]." ".$myArray2[1] ;
//We can print array with for loop also.

// Associative array or Key-Value pair array
$AssArray=["one"=>"ekk", "two"=>2];
echo "<br>Now this is Associative array: ".$AssArray["one"]." ".$AssArray["two"]."<br>";
print_r($AssArray);
echo"<hr>DataTypes of Array";
var_dump($AssArray); echo"<hr>";
echo"Here is ForEach loop for simple array.<br>";
foreach ($AssArray as $printArr) { echo $printArr." "; }
echo"<br>Here is ForEach loop for Associative array with Unordered list.<br>"; echo "<ul>";
foreach ($AssArray as $key=>$myVal) {
    echo "<li> $key $myVal </li>";
} echo "</ul>";
echo "<p><hr>Some fun with reassign array value.</p>";
print_r($AssArray);
$AssArray["two"]=22; echo"<br>Print Associative Array.<br>";
print_r($AssArray); echo"<br>";
print_r($myArray); $myArray[0]="BLAcK";
echo"<br>Print Simple Array.<br>"; print_r($myArray);
?></body></html>
