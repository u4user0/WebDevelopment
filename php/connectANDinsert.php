<html><body>
<?php
// 1st: DB Link, 2nd: UserName.
// 3rd: Password, 4th: DataBase name.
  $con = mysqli_connect("localhost:3306","root","root","test");
if (!$con) {
echo "Error while connecting db";
}
echo "Connected successfully";
$query="insert into dummy(test, id, age, roll) values(6,9,6,8)";
$query_run = mysqli_query($con,$query);
if($query_run) {
echo "Successfully assigned task";
} else {
echo "Error while assigning Task!";
}
?>
</body></html>
