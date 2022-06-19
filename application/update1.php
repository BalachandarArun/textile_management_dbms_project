<?php 
$host="127.0.0.1:3307"; // Host name 
$username="root"; // mysqli username 
$password=""; // mysqli password 
$db_name="fashion_loft"; // Database name 
$tbl_name="qtestdec2"; // Table name 

// Connect to server and select database. 
$con = mysqli_connect("127.0.0.1:3307", "root", "bala123", "fashion_loft"); or die("cannot connect"); 
// mysqli_select_db("$db_name")or die("cannot select DB"); 

// update data in mysqli database 
$sql="UPDATE $tbl_name SET Oid='$Oid', result='$result', comment='$comment' WHERE Qid='$Qid'"; 
$result=mysqli_query($con, $sql); 

// if successfully updated. 
if($result){ 
echo "Successful"; 
} 

else { 
echo "ERROR"; 
} 

?> 