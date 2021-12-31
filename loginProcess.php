<?php
	include"myconnection.php";

	$username=$_POST["username"];
	$password=md5($_POST["password"]);

	$query = "SELECT username, password 
    FROM admin 
    WHERE username='$username' AND password='$password' 
    UNION 
    SELECT username, password 
    FROM visitors 
    WHERE username='$username' AND password='$password'
    UNION 
    SELECT username, password 
    FROM residents 
    WHERE username='$username' AND password='$password'";

	$result=mysqli_query($connect, $query);
	$check=mysqli_num_rows($result);
	
	if($check>0){
		header("Location:home.html");
	}
	else{
		var_dump($check);
		header("Location: login.php?error=failed");
	}
?>
<?php