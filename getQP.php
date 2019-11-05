<?php

$con=mysqli_connect("localhost","root","","qbank") ;
$query="SELECT options,content FROM qstn;";
$query_res=mysqli_query($con, $query) ;



$i=1;
class qpaper{
    var $q;
    var $num;
}$toSend;
$n=mysqli_num_rows($query_res);
//echo '{"qpaper":[';
//$qarray[]=array();
while($i<=$n)
{
     //echo json_encode(mysqli_fetch_object($query_res));
     $row= mysqli_fetch_assoc($query_res);
     $qarray[]=$row;
     $i++;
}
$toSend->q=$qarray;
$toSend->num=$n;
echo json_encode($toSend);
$con->close();
?>