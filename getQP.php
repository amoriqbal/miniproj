<?php
$con=mysqli_connect("localhost","root","","qbank") or die("connection error");
$query="SELECT * FROM questions;";
$query_res= mysqli_query($con, $query);
echo $_POST['diff']." ".$_POST['tim']." ".$_POST['sub'];
?>