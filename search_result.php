
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
<head>
	<title>搜尋結果頁面</title>

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

				           		<h1>搜尋結果</h1>
<?php
	session_start();
	if(isset($_SESSION["user"])){
		echo "<center>歡迎使用者</center></br>";

	}else{
		echo "<center>非法進入</center>";
		header("Refresh:3;url=Index.php");  
}
?>
</head>

<body>
<center>

<?php
header("Content-Type:text/html; charset=utf-8");
$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'q1633218932'
					 ,'final_database' );
mysqli_query($link,'SET NAMES utf8');

$search=$_POST['search']; 
$sql = " SELECT * FROM song WHERE singer LIKE '%".$search."%' OR songname LIKE '%".$search."%'";
$result=mysqli_query($link,$sql);

echo "搜尋結果";
echo "<table border=1>";
echo "<tr>";
echo "<td>";
echo "歌名";
echo "</td><td>";
echo "歌手";
echo "</td><td>";
echo "連結";
echo "</td>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>";
echo $row["songname"];
echo "</td><td>";
echo $row["singer"];
echo "</td><td>";
?>

<a href="count.php?id=<?php echo $row["song_id"];?>"><?php echo $row["link"];?></a>

<?php
echo "</td>";
echo "<tr>";
}
echo "<table>";


?>
<a href="user.php">回上一頁</a>
</center>
</body>

</html>
