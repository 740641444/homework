<?php

    include "session.php";
    include "db.php";
    include "function.php";		

$editid=$_GET["id"];
$editpid=$_GET["pid"];
$edittitle=$_GET["title"];
$edittext=$_GET["text"];

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
<style>
	
	#title{
		width: 400px;
	}
	textarea{
		width: 400px;
		height: 300px;
	}
	
</style>
</head>
<body>
	<form action="editshowinfo.php" method="get">
		内容所在目录：<select name="pid" id="">
		<?php

        $str1="";
		function tree($pid,$flag,$db,$table,$editpid){
			$sql="select * from $table where pid=".$pid;
		    $result=$db->query($sql);
		    while($row=$result->fetch_assoc()){
		    	$id=$row["id"];
		    	if($id==$editpid){
		    		echo $editpid;
		    		$str1.="<option selected='' value={$id}>{$flag}{$row["cname"]}</option>";
		    	}else{
		    		$str1.="<option value={$id}>{$flag}{$row["cname"]}</option>";
		    	}
	    		tree($id,$flag.$flag,$db,$table);
		   }
		}
		tree(0,"-",$db,"category",$editpid);
		echo $str1;
		?>
		</select><br />
		标题：<br />
		<input type="text" id="title" name="title" value="<?php echo $edittitle; ?>" /><br />
		内容：<br />
		<textarea name="text"  rows="" cols=""><?php echo $edittext; ?></textarea><br />
		<input type="hidden" name="id" id="" value="<?php  echo $editid ?>" />
		<input type="submit" name="sub" value="修改"/>
	</form>
</body>
</html>