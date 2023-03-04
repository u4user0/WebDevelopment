<?php $str="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
function hello() {
    echo "Hello Function.<br>";
}

function add($a, $b) {
echo "Add of $a and $b is: ".($a + $b)."<br>";
}
function RetVal($a, $b) {
return "RetVal function returns: ".($a * $b)."<br>";
}
function AddStr(&$str) { echo "<br>Im inside function NOW.<br>";
    echo "The value of str before str=abc....jkl statement is: ".$str."<br>";
    $str="abcdefghijkl";
    echo "now str is: ".$str." now Function is gonna ENDS.<br>";
}
function TestStr($str) { echo "<br>Im inside function NOW.<br>";
    echo "The value of str before str=mno....xyz statement is: ".$str."<br>";
    $str="mnopqrstuvwxyz";
    echo "now str is: ".$str." now Function is gonna ENDS.<br>";
}
$AnonymouseFunction=function() { echo "Im Anonymouse function, have you seen my code?"; };
function VarFunc() { echo "<br>Im variable function.<br>"; }
?> <html><body>
<h1><b>Tutorial of functions in PHP.</b></h1><hr>
<p><b>Simple function: </b><?php hello(); ?></p><hr>
<p><b>Sum function: </b><?php add(8,4); ?></p><hr>
<p><b>Return value function: </b>
<?php $val=RetVal(7,8);
echo "$val";
?></p><hr>
<p><b>Test String function: </b>
<?php
TestStr($str);
echo "The original value of str is same: $str<br>";
?></p><hr>
<p><b>Add String (adress of operator) function: </b>
<?php
echo "<br>After as we know str is same: $str";
AddStr($str);
echo "The original value of str is not same: $str<br>";
?></p><hr>
<p><b>Varible function: </b> <?php
$SimVar="VarFunc";
$SimVar();
$AnonymouseFunction();
?></p><hr> </body></html>
