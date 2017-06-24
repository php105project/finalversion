<?php
header("Content-Type:text/html; charset=utf-8");
$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'q1633218932'
					 ,'final_database' );


mysqli_query($link,'SET NAMES utf8');
 
$songname=$_POST['rec_songname'];
$singer=$_POST['rec_singer'];
$songinform=$_POST['songinform'];


$sql_insert = "INSERT INTO recom(songname,singer,songinform) VALUES ('$songname','$singer','$songinform')";

$sql_update = "UPDATE recom SET recom_num = recom_num+1 WHERE songname = '$songname'";

$sql = "SELECT * FROM recom WHERE songname ='$songname'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

if($songname!="" && $singer!="" && $songinform!=""){
	if($row[0]!=$songname || $row[1]!=$singer){
		if(mysqli_query($link,$sql_insert)){
			echo "<center>推薦已送出，3秒後自動跳回上頁</center>";
			header("Refresh:3;url=Recommend.php");
		}
	}elseif($row[0]==$songname && $row[1]==$singer){
		if(mysqli_query($link,$sql_update)){
		echo "<center>推薦已存在，推薦次數+1，3秒後自動跳回上頁</center>";
		header("Refresh:3;url=Recommend.php");
		}
	}
}else{
	echo "<center>推薦失敗</center>";
	header("Refresh:3;url=Recommend.php");
}

?>
