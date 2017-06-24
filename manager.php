<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">  

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">

<head>
	<title>管理者頁面</title>

	<style type="text/css">

		body {		
			background-image: url(songla.png);
			background-color:transparent; 
			background-repeat:  no-repeat;
			background-attachment: auto;			
			background-position: center top;
			background-size: auto; 
            width: 50%;
			padding:50px;
			padding-left: 10%;

			/*color: ; 文字白色*/
 			/*div.st加背景圖片並定義與圖片同尺寸*/
 			opacity:;
 			}

 		h1{
			font-size: 50px;                  /*設定字體大小*/
			font-family: Microsoft JhengHei;  /*微軟正黑體*/
			font-weight: 50px;                /*設定粗細*/
			color: black;
			vertical-align: auto;             /*定義內文垂直對齊方式*/
			text-align: center;
		}

 		.button{
 			border: none;
 			color: white;
 			padding: 14px 28px;
 			font-size: 16px;
 			cursor: pointer;
 		}

 		.搜尋{
 			background-color: #2196F3;
 		}

 		.搜尋:hover{
 			background: #0b7dda;
 		}

 		.推薦{
 			background-color: #4CAF50;
 		}

 		.推薦:hover {
 			background-color: #46a049;
 		}

 		.登出{
 			background-color: #e7e7e7; color: black;
 		}

 		.登出:hover{
 			background: #ddd;
 		}

	</style>

</head>
<body class="templatemo-bg-gray">
	<div class="container">
		<div class="col-md-13">
			<!--<h1 class="text-center margin-bottom-13"></h1>	<br>-->	
				<form class="form-horizontal templatemo-contact-form-2 templatemo-container"  role="form" >
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">				          		          	
				           		<div class="col-sm-12">

				           		<h1>使用版面</h1>

<?php
	session_start();
	if(isset($_SESSION["manager"])){
		echo "<center>歡迎管理者</center></br>";

	}else{
		echo "<center>非法進入</center>";
		header("Refresh:3;url=Index.php");  

}

?>
</head>
<body>
<center>


<?php


$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'q1633218932'
					 ,'final_database' );


mysqli_query($link,"SET NAMES 'UTF8'");
$sql="SELECT * FROM song";
$result = mysqli_query($link,$sql);

$sql_rec="SELECT * FROM recom";
$result_rec = mysqli_query($link,$sql_rec);



echo "使用者推薦的歌曲";
echo "<table border=1>";
echo "<tr>";
echo "<td>";
echo "歌名";
echo "</td><td>";
echo "歌手";
echo "</td><td>";
echo "連結";
echo "</td><td>";
echo "推薦次數";
echo "</td><td>";
echo "新增推薦";
echo "</td><td>";
echo "刪除推薦";
echo "</td>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result_rec)){
echo "<tr>";
echo "<td>";
echo $row["songname"];
echo "</td><td>";
echo $row["singer"];
echo "</td><td>";
echo $row["songinform"];
echo "</td><td>";
echo $row["recom_num"];
echo "</td><td>";
?>
<a href=add_rec.php?id=<?php echo $row["recom_id"] ?>>新增推薦<a>
<?php
echo "</td><td>";
?>
<a href=del_rec.php?id=<?php echo $row["recom_id"] ?>>刪除推薦<a>
<?php
echo "</td>";
echo "<tr>";
}

echo "<table>";



echo "已存在歌曲";
echo "<table border=1>";
echo "<tr>";
echo "<td>";
echo "歌曲ID";
echo "</td><td>";
echo "歌名";
echo "</td><td>";
echo "歌手";
echo "</td><td>";
echo "連結";
echo "</td><td>";
echo "點擊次數";
echo "</td><td>";
echo "刪除歌曲";
echo "</td>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>";
echo $row["song_id"];
echo "</td><td>";
echo $row["songname"];
echo "</td><td>";
echo $row["singer"];
echo "</td><td>";
echo $row["link"];
echo "</td><td>";
echo $row["clickrate"];
echo "</td><td>";
?>
<a href=del.php?id=<?php echo $row["song_id"] ?>>刪除歌曲<a>
<?php
echo "</td>";
echo "<tr>";
}
echo "<table>";

?>
</center>
</head>
<center>

</center>

<center>
</br>
</br>

</br>
</br>
</br>

<a href="member.php">管理會員資料</a>

</br>
</br>
</br>
<a href="analyze.php">數據統計</a>

</br>
</br>
</br>
<a href='Index.php'>登出</a>
</center>


				           		</div>
				           	</div>
				        </div>
				   	</div>
				</form>
		</div>
	</div>
</body>
</html>

