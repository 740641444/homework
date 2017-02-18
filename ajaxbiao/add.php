<?php
include "db.php";
$add=$db->query("insert into stu () values ()");
//$add=$db->query("insert into stu () value ()");
//$result=$add->fetch_assoc();
if($add==1){
	echo $db->insert_id;
}
?>