<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">  

<!--
「HTTP-EQUIV="Content-Type"」代表在此標籤所定義的字串，將被以 HTTP 表頭資訊的方式送到用戶端，其類別是 Content-Type
「CONTENT="text/html; charset=utf-8"」代表送到用戶端的資訊是文字，且是 HTML，而且其語言的編碼方式是 utf-8 
-->

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">

<head>
	<title>審核頁面</title>

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

				           		<h1>審核版面</h1>
	<center>


	<?php

session_start();
if(isset($_SESSION["manager"])){
	echo "<center>歡迎管理者進入審核頁面</center></br>";
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
echo "recom_id";
echo "</td><td>";
echo "songname";
echo "</td><td>";
echo "singer";
echo "</td><td>";
echo "songinform";
echo "</td><td>";
echo "recom_num";
echo "</td>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>";
echo $row["recom_id"];
echo "</td><td>";
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
</br>
</br>
</br>
	<center>
		通過審核
	<form action="add_rec.php" method="post">
	通過推薦編號<input type="text" name="add_num"><br>
	<input type="submit" name="sent" value="送出"></br></br>
	</br>
	</br>
	</br>
	</form>

		刪除審核
	<form action="del_rec.php" method="post">
	刪除推薦編號<input type="text" name="del_num"><br>
	<input type="submit" name="sent" value="送出"></br></br>
	</form>	
	</br>
	</br>
	</br>
	<a href="manager.php">回上一頁</a>

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