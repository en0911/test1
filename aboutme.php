<!DOCTYPE html>
<html lang="en">
<font color = "black" face="標楷體">
<head>
	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:black; font-size:60px;}
		h2 {color:hsl(12, 87%, 69%); font-size:40px;}
	</style>
	<script>
		function change1() {
  			document.getElementById("pic").src = "photo.jpg";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "picture.jpg";
  			document.getElementById("h2text").innerText = "Feng-en Jiang";
		}
	</script>

	<meta charset="zh-TW">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>en0911</title>
</head>

<body>
	<table width="70%" align="center">
		<tr>
			<td>
<img src="picture.jpg"width="500" height ="500"id="pic" onmouseover="change1()" onmouseout="change2()">></img>
			</td>

			<td>
				<h1>蔣豐恩</h1>
				<h2 id="h2text">Feng-en Jiang</h2>
			</td>
		</tr>
	</table>
		<table width="70%"><tr>
			<td>
<table width="70%"height="80" border="1" align="center" style="table-layout:fixed">
		<tr>
			<td >
FB：<a href="https://www.facebook.com/profile.php?id=100000807740256" target="_blank">https://www.facebook.com/profile.php?id=100000807740256</a><br>
</td>
            <td colspan="2">

            	爆哥 Neal《咖哩爆飯》Official Music Video<br>
<audio src="爆哥 Neal《咖哩爆飯》Official Music Video @爆哥Neal √.mp3" controls loop >
		</audio>
</td>

<td colspan="2">
	
     Free Neo Soul Trap Beat 【Prod. ame beats】<br>
	<iframe src="https://www.youtube.com/embed/FCrRSdKwqz4"allowfullscreen ></iframe>
</td>
<?php echo date("Y-m-d") ?>
</body>
</font>
</html>