<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<script src="../js/jquery.min.js"></script>
		<style>
			
			.box{
				width: 400px;height: 240px;
				padding: 30px 0;
				border: 1px solid #000000;
				position: fixed;
				top: 0;bottom: 0;left: 0;right: 0;
				margin: auto auto;
				text-align: center;
			}
			.chenggong{
				font-size: 25px;
				color: deeppink;
				line-height: 100px;
			}
		</style>
		<script>
			$(function(){
				var num=3;
				$("span").eq(1).text(num);
				var t1=setInterval(function(){
					num--
					$("span").eq(1).text(num);
					if(num==0){
						clearInterval(t1);
						var aa=$("a").attr("href");
						location.href=aa;
						console.log(aa)
					}
				},1000)				
			})

		</script>
	</head>
	<body>
		<div class="box">
			<span class="chenggong"><?php echo $massage ?></span><br />
			<span></span>秒后返回，立即返回点<a href="<?php echo $url ?>">这里</a>
		</div>
	</body>
</html>
