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
	<form action="addshowinfo.php" method="get">
		内容所在目录：<select name="pid" id="">
		<?php
			$aa=new abc();
		
			$aa->tree(0,"-",$db,"category");
            echo $aa->str;
		?>
		</select><br />
		标题：<br />
		<input type="text" id="title" name="title" value="" /><br />
		内容：<br />
		<textarea name="text" rows="" cols=""></textarea><br />
		<input type="submit" name="sub" value="发表"/>
	</form>
</body>
</html>