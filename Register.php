<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">  

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">

<head>
	<title>註冊頁面</title>

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

				           		<h1>註冊版面</h1>
<form action="RegisterProcess.php" method="post">
	<center>
		帳號(請輸入英文):<input type="text" name="id"></br>
		密碼:<input type="password" name="pwd"></br>
		再輸入一次密碼:<input type="password" name="pwd1"></br>
		性別:<select name="sex">
			<option value="male">男</option>
			<option value="female">女</option>
		</select></br>
		<input type="submit" name="sent" value="送出"></br>
		<a href="Index.php">已有帳密，請按此登入</a>
</form>


				           		</div>
				           	</div>
				        </div>
				   	</div>
				</form>
		</div>
	</div>
</body>
</html>
