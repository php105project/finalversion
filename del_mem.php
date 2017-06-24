<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">  

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">

<head>
	<title>會員管理</title>

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

				           		<h1>會員管理</h1>
	<center>
	<?php
	session_start();
	if(isset($_SESSION["manager"])){
		echo "<center>歡迎管理者</center></br>";

	}else{
		echo "<center>非法進入</center>";
		header("Refresh:3;url=Index.php");  

}

?>
</center>
</head>
<body>
<center>

<?php
header("Content-Type:text/html; charset=utf-8");

$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'q1633218932'
					 ,'final_database' );
mysqli_query($link,"SET NAMES 'UTF8'");

$mem_bye=$_POST["mem_bye"];
$sql="SELECT * FROM userdata WHERE username = '$mem_bye'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

$del_mem = "DELETE FROM userdata WHERE username = '$mem_bye'";

if($row[0]==$mem_bye){
	if(mysqli_query($link,$del_mem)){
		echo "使用者已刪除，三秒後回到上頁";
		header("Refresh:3;url=member.php");

	}
}else{
	echo "成員不存在，三秒後回到上頁";
	header("Refresh:3;url=member.php");
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