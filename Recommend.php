<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>推薦歌曲</title>
	<center>
	<?php

session_start();
if(isset($_SESSION["user"])){
	echo "<center>歡迎使用者進入推薦頁面</center></br>";
}else{
	echo "<center>非法進入</center>"; 
	header("Refresh:3;url=Index.php");
}

$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'q1633218932'
					 ,'final_database' );
mysqli_query($link,"SET NAMES 'UTF8'");
$sql="SELECT * FROM recom";
$result = mysqli_query($link,$sql);

echo "<table border=1>";
echo "<tr>";
echo "<td>";
echo "歌名";
echo "</td><td>";
echo "歌手";
echo "</td><td>";
echo "歌曲資料";
echo "</td><td>";
echo "推薦次數";
echo "</td>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>";
echo $row["songname"];
echo "</td><td>";
echo $row["singer"];
echo "</td><td>";
echo $row["songinform"];
echo "</td><td>";
echo $row["recom_num"];
echo "</td>";
echo "<tr>";
}
echo "<table>";

?>
</center>
</head>

<body>

<center>

<form action="RecommendProcess.php" method="post">

推薦歌名<input type="text" name="rec_songname"><br>
推薦歌手<input type="text" name="rec_singer"><br>
歌曲連結<input type="text" name="songinform"><br>

<input type="submit" value="提交" /><br>

</form>
<br><br><br>
<a href='User.php'>回上一頁</a>
</center>
</body>

</html>