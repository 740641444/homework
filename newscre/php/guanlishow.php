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
			width: 900px;
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
				<th>标题</th>
				<th>内容</th>
				<th>pid</th>
				<th>日期</th>
				<th>操作</th>
			</thead>
			<tbody>
				<?php
					$sql="select * from shows";
				    $result=$db->query($sql);
				    $str="";
				    while($row=$result->fetch_assoc()){ 
				    	$str.="<tr>";
				    	$str.="<td>{$row["id"]}</td>";
				    	$str.="<td>{$row["title"]}</td>";
				    	$str.="<td>{$row["text"]}</td>";
				    	$str.="<td>{$row["pid"]}</td>";
				    	$str.="<td>{$row["date"]}</td>";
				    	$str.="<td><a href='delshow.php?id={$row["id"]}' class='del'>删除</a><a href='editshow.php?pid={$row["pid"]}&&title={$row["title"]}&&text={$row["text"]}&&id={$row["id"]}' class='edit'>编辑</a></td>";
				    	$str.="</tr>";
				    }
				    echo $str;
				?>				
			</tbody>
		</table>

	</form>
</body>
</html>