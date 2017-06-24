<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">   

<!--
「HTTP-EQUIV="Content-Type"」代表在此標籤所定義的字串，將被以 HTTP 表頭資訊的方式送到用戶端，其類別是 Content-Type
「CONTENT="text/html; charset=utf-8"」代表送到用戶端的資訊是文字，且是 HTML，而且其語言的編碼方式是 utf-8 
-->

<head>
	<title>登入版面設計</title>

	<style type="text/css">

		body {	
			background-image: url(songla.png);
			background-color:transparent; 
			background-repeat:  no-repeat;
			background-attachment: auto;			
			background-position: left top;
			background-size: auto; 
            width: 25%;
			padding:0px;
			padding-left: 60%;
			color: ; /*文字白色*/
 			/*div.st加背景圖片並定義與圖片同尺寸*/
 			opacity: ;
 			}

		lh1{
			font-size: 50px;                  /*設定字體大小*/
			font-family: Microsoft JhengHei;  /*微軟正黑體*/
			font-weight: 50px;                /*設定粗細*/
			color: black;
			vertica-align: auto;             /*定義內文垂直對齊方式*/
			text-align: center;
		}


		#login{                               /*自行設計一個物件，名為login*/
			width: auto;
			height: auto;
			padding:auto;
			font-size: 12px;
		}

		legend{
			font-size: 25px;
			font-family: Microsoft JhengHei; 
			color: black;
			vertical-align: auto; 
			text-align: center;
		}

		label{                      /*表單項中的標籤樣式(html本身屬性設定)*/
			line-height: 26px;
			display: block;
			font-weight: bold;
			opacity: 1;
		}

		#id,#pwd{           /*文字框公共樣式*/ 
 			border: 1px solid #ccc;
 			width: 160px;
 			height: 22px;          /*固定高度*/
 			padding-left:20px;     /*擠出位置*/
 			line-height: 20px; 	   /*讓輸入文字居中*/
 			margin: 6px 0;
		}

	</style>
</head>
<body>

<h1>會員登入</h1>

	<fieldset id="login">
		<legend>SongLa會員登入</legend>

		<center>

		<form action="Login.php" method="post">

			<label>帳號:
				<input type="text" name="id" id="id">
			</label>
			<label>密碼:
				<input type="password" name="pwd" id="pwd">
			</label>
				<input type="submit" value="登入"><br>
			<label>
				<a href="Register.php">未註冊請按此</a>
			</label>

		</form>

		</center>

	</fieldset>

</body>
</html>

<?php
session_start();
if(isset($_SESSION["user"])){
	unset($_SESSION["user"]);
}elseif(isset($_SESSION["manager"])){
	unset($_SESSION["manager"]);
}
?>