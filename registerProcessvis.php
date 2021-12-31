<?php  
	include"myconnection.php";


		$Name = $_GET["Name"];
		$Email = $_GET["Email"];
		$Username = $_GET["Username"];
		$Password = $_GET["Password"];
		$Sex = $_GET["Sex"];
		$Age= $_GET["Age"];
		$Address = $_GET["Address"];
		$ContactNo = $_GET["ContactNo"];

		$query = "INSERT INTO visitors(Name, Email, Username, Password, Sex, Age, Address, ContactNo) 
				VALUES('$Name', '$Email', '$Username', '$Password',  '$Sex',  '$Age', '$Address', '$ContactNo')";


	if(mysqli_query($connect, $query)){
		echo "New record added successfully";
		header("Location:home.html");
	}
	else{
		echo "New record failed to add <br>" . mysqli_error($connect);
	}
	mysqli_close ($connect);
?>
