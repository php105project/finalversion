<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">  

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">

<head>
	<title>推薦頁面</title>

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

				           		<h1>推薦版面</h1>


<?php
header("Content-Type:text/html; charset=utf-8");
$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'q1633218932'
					 ,'final_database' );


mysqli_query($link,'SET NAMES utf8');
 
$username=$_COOKIE['id'];//username

$songname=$_POST['rec_songname'];
$singer=$_POST['rec_singer'];
$songinform=$_POST['songinform'];
/*
$sql_song = "SELECT * FROM song";
$result_song = mysqli_query($link,$sql_song);*/

$sql_uid="SELECT * FROM userdata WHERE username = '$username'";
$result_uid=mysqli_query($link,$sql_uid);
$row_uid=@mysqli_fetch_row($result_uid);
$u_id=$row_uid[3];

$sql_insert = "INSERT into recom(songname,singer,songinform,u_id) VALUES ('$songname','$singer','$songinform','$u_id')";

$sql_update = "UPDATE recom SET recom_num = recom_num+1 WHERE songname = '$songname'";

$sql = "SELECT * FROM recom WHERE songname ='$songname'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

if($songname!="" && $singer!="" && $songinform!=""){
	if($row[0]!=$songname || $row[1]!=$singer){
		if(mysqli_query($link,$sql_insert)){
			echo "<center>推薦已送出，3秒後自動跳回上頁</center>";
			header("Refresh:3;url=recome.php");
		}
	}elseif($row[0]==$songname && $row[1]==$singer){
		if(mysqli_query($link,$sql_update)){
			echo "<center>推薦已存在，推薦次數+1，3秒後自動跳回上頁</center>";
			header("Refresh:3;url=recome.php");
		}
	}
}else{
	echo "<center>推薦失敗</center>";
	header("Refresh:3;url=recome.php");
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