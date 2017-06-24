<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">  

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">

<head>
	<title>新增歌曲</title>

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

				           			<h1>add.php</h1>

<?php

$songname=$_POST["Add_songname"];
$singer=$_POST["Add_singer"];
$add_link=$_POST["Add_link"];



session_start();
if(isset($_SESSION["manager"])){
	echo "<center><h1>歡迎管理者</h1></center></br>";
}else{
	echo "<center><h1>非法進入</h1></center>"; 
	header("Refresh:3;url=Index.php");
}

$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'q1633218932'
					 ,'final_database' );
mysqli_query($link,"SET NAMES 'UTF8'");

$sql_INSERT="INSERT into song(songname,singer,link) VALUES ('$songname','$singer','$add_link')"; 
$sql="SELECT * FROM song WHERE songname LIKE '$songname'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

if($row[1]!=$songname || $row[2]!=$singer || $row[3]!=$add_link){
	if(mysqli_query($link,$sql_INSERT)){
		echo "<center>新增成功，3秒後自動跳回上頁</center>";
		header("Refresh:3;url=manager.php");
	}
}elseif($songname==""||$singer==""||$add_link==""){
	echo "<center>請輸入歌曲</center>";
	header("Refresh:3;url=manager.php");
}elseif($row[1]==$songname && $row[2]==$singer){
	echo "<center>歌曲已存在，3秒後自動跳回上頁</center>";
	header("Refresh:3;url=manager.php");
}


?>


								</div>
				           	</div>
				        </div>
				   	</div>
				</form>
		</div>
	</div>
</body>
</html>

