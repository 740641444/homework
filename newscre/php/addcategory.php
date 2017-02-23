<?php

    include "session.php";
    include "db.php";
    include "function.php";		


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>

</head>
<body>
	<form action="addcategoryinfo.php" method="get">
		管理分类：<select name="pid" id="">
			<option value="0">一级标题</option>
		<?php
			$aa=new abc();
		
			$aa->tree(0,"-",$db,"category");
            echo $aa->str;
		?>
		</select><br />
		添加分类：
		<input type="text" name="cname" value="" />
		<input type="submit" name="sub" />
	</form>
</body>
</html>