<?php  
	include"myconnection.php";
		$Name = $_GET["Name"];
		$Address = $_GET["Address"];
		$Contact_No = $_GET["Contact_No"];
		$Van = $_GET["Van"];
		$Car = $_GET["Car"];
		$Jeep = $_GET["Jeep"];
		$Bus = $_GET["Bus"];
		$Motorcycle = $_GET["Motorcycle"];
		$Days = $_GET["Days"];
		$Destination = $_GET["Destination"];
		$Date_of_use = $_GET["Date_of_use"];
		$Drivers = $_GET["Drivers"];

		$query = "INSERT INTO services (Name, Address, Contact_No, Van, Car, Jeep, Bus, Motorcycle, Days, Destination, Date_of_use, Drivers) 
				VALUES('$Name', '$Address', '$Contact_No', '$Van', '$Car', '$Jeep', '$Bus', '$Motorcycle', '$Days', '$Destination', '$Date_of_use', '$Drivers')";


	if(mysqli_query($connect, $query)){
		echo "New record added successfully";
		header("Location:services.html");
	}
	else{
		echo "New record failed to add <br>" . mysqli_error($connect);
	}
	mysqli_close ($connect);
?>