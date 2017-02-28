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
		table{
			width: 800px;
			margin: 0 auto;
		}
		th,td{
			/*width: 100px;*/
			text-align: left;
			border: 1px solid plum;
		}
		.del{
			width: 80px;
			text-align: center;
			/*background-color: palevioletred;*/
			border-radius: 2px;
			margin-right: 10px;
		}
		.edit{
			width: 80px;
			text-align: center;
			/*background-color: palevioletred;*/
			border-radius: 2px;
		}
	</style>
</head>
<body>
	<form action="addcategoryinfo.php" method="get">
		<table>
			<thead>
				<th>id</th>
				<th>栏目名称</th>
				<th>pid</th>
				<th>操作</th>
			</thead>
			<tbody>
				<?php
					$aa=new abc();
					$aa->guanlitree(0,"-",$db,"category");
		            echo $aa->guanlistr;
				?>				
			</tbody>
		</table>

	</form>
</body>
</html>