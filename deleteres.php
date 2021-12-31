<?php
	include"myconnection.php";

	$id=$_GET["id"];

	$query="DELETE FROM residents WHERE ID=$id";

	if(mysqli_query($connect, $query)){
		header('Location:adminresidents.php');
	}
	else{
		echo"Record failed to delete<br>".mysqli_error($connect);
	}
	mysqli_close($connect);
?>