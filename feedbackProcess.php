<?php  
		include"myconnection.php";
		
		$Name = $_GET["Name"];
		$Feedback = $_GET["Feedback"];
		

		$query = "INSERT INTO feedback (Name, Feedback) 
				VALUES('$Name', '$Feedback')";


	if(mysqli_query($connect, $query)){
		header('Location:index.html');
	}
	else{
		echo "Failed to add Feedback <br>" . mysqli_error($connect);
	}
	mysqli_close ($connect);
?>
