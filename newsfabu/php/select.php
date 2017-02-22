<?php
include "db.php";
$sql="select * from news";
$result=$db->query($sql);
$arr=array();
while($row=$result->fetch_assoc()){
	$arr[]=$row;
}
$arr=json_encode($arr);
echo $arr;
?>