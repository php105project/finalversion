<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">  

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">

<head>
	<title>新增結果</title>

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

				           		<h1>新增結果</h1>
<center>
<?php

$id=$_GET['id'];

	session_start();
	if(isset($_SESSION["manager"])){
		echo "<center>歡迎管理者</center></br>";


$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'q1633218932'
					 ,'final_database' );


mysqli_query($link,"SET NAMES 'UTF8'");
$sql="SELECT * FROM song";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);


$sql_rec="SELECT * FROM recom WHERE recom_id = '$id'";
$result_rec = mysqli_query($link,$sql_rec);
$row_rec = @mysqli_fetch_row($result_rec);

$sql_INSERT="INSERT into song(songname,singer,link,recom_id) VALUES ('$row_rec[0]','$row_rec[1]','$row_rec[2]','$row_rec[5]')"; 
$sql_DELETE="DELETE FROM recom WHERE recom_id LIKE '$id'"; 

	
if (mysqli_query($link,$sql_INSERT)) {
	if(mysqli_query($link,$sql_DELETE)){
			echo "歌曲已新增，三秒後回到上頁";
			header("Refresh:3;url=manager.php");
	}
}


}else{
	echo "<center>非法進入</center>";
	header("Refresh:3;url=Index.php");  
}
?>
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

