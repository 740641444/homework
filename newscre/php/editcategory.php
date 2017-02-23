<?php
include "session.php";
include "db.php";
include "function.php";	

$editid=$_GET["id"];
$editpid=$_GET["pid"];
$editcname=$_GET["cname"];

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>

</head>
<body>
	<form action="editcategoryinfo.php" method="get">
		管理分类：<select name="pid" id="">
		<?php
			$aa=new abc();
			$aa->tree(0,"-",$db,"category",$editpid);
            echo $aa->str;
		?>
		</select><br />
		添加分类：
		<input type="text" name="cname" value="<?php  echo $editcname ?>" /><br />
		<input type="hidden" name="id" id="" value="<?php  echo $editid ?>" />
		<input type="submit" name="sub" value="修改" />
	</form>
</body>
</html>