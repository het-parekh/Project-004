<?php
$con=mysqli_connect("localhost","root","akash","iot_inventory");

$id = $_POST[delete_id];
$query = "UPDATE students set g_id =NULL where Rollno='$id'";
$data = mysqli_query($con, $query);


?>