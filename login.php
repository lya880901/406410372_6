<?php
require "conn.php";
$user_name = $_POST["username01"];
$user_pass = $_POST["password01"];
$mysql_qry = "select * from data where username like '$user_name' and password like '$user_pass';";
$result = mysqli_query($conn ,$mysql_qry);
if(mysqli_num_rows($result) > 0){
echo "login success";
}
else {
echo "login not success";
}
?>