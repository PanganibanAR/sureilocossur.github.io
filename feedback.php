<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sure Ilocos Sur</title>
  <!---Menyisipkan Javascript--->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!--- Menyisikpan Javascript--->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!--javascripts-->
  <script src="validation.js"></script>
  <script src="sidenav.js"></script>
<!--css-->
<link rel="stylesheet" type="text/css" href="sidenav.css">
<link rel="stylesheet" type="text/css" href="content1.css">
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="style.css"/>


</head>
<body>
  <!--toggle navigation-->
<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#"> <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="about.html">About</a>
  <a href="services.html">Services</a>
  <a href="https://geographic.org/streetview/philippines/region_1/ilocos_sur.html"  target="_blank">Municipalities</a>
  <a href="adminLogin.php">Admin</a>
  <a href="feedback.php">Feedback</a>
  </div><!--sidenav-->
<div id="main">
     <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Sure Sur</span>
    </div><!--main--> </a>
    
   </button> 
    <div class="collapse navbar-collapse"></div>
   <div class="btn-group">
  <a href="home.html"><button type="button" class="btn btn-dark">Home</button></a>
  <a href="features.html"><button type="button" class="btn btn-dark">Features</button></a>
    <a href="services.html"><button type="button" class="btn btn-dark">Services</button></a>
  <a href="home.html"><button type="button" class="btn btn-dark">Logout</button></a>
      </nav> <!--toggle navigation-->

</div>

<div class="container-fluid" style="margin-top: 10%;">
 <h1 align="center">FEEDBACKS</h1>
  	<table>
			<tr>
				<th>Name</th>
				<th>Feedback</th>
			</tr>
			<?php  
				include "myconnection.php";

				$query = "SELECT * FROM feedback";
				$result = mysqli_query($connect, $query);

				iF(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_array($result)){
			?>
			<tr>
				<td> <?php echo $row["Name"];?></td>
				<td> <?php echo $row["Feedback"];?></td>
			</tr>
			<?php
					}
				}
				else{
					echo "0 results";
				}
			?>
		</table>

<div>
</div>

</body>
</html>


