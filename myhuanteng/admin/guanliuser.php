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
		<table>
			<thead>
				<th>id</th>
				<th>用户名</th>
				<th>操作</th>
			</thead>
			<tbody>
				<?php
					$str="";
					$sql="select * from user ";
				    $result=$db->query($sql);
				    while($row=$result->fetch_assoc()){
				    	$str.="<tr>";
				    	$str.="<td>{$row["id"]}</td>";
				    	$str.="<td>{$row["name"]}</td>";
				    	$str.="<td><a href='deluser.php?id={$row["id"]}' class='del'>删除</a></td>";
				    	$str.="</tr>";
				    }
				    echo $str;
				?>				
			</tbody>
		</table>

</body>
</html>