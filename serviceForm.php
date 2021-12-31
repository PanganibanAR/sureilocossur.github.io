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

<!--css-->
<link rel="stylesheet" type="text/css" href="sidenav.css">

<style type="text/css">
body{
      background: #9776;
}
</style>

</head>
<body>

<div>
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
  <a href="feedbackForm.php"><button type="button" class="btn btn-dark">Logout</button></a>
 
  </div>
    </nav>
</div>



<div class="container-fluid" style="margin-top: 10%;">

  <div class="row content">

    <div class="col-md-4  side">
        

       
    </div>  <!-- col sm 4 -->


    <div class="col-sm-8 maincontent">

      
	<script>
		function multiplyBy()
			{
		        input1 = document.getElementById("Van").value;
		        input2 = document.getElementById("Car").value;
		        input3 = document.getElementById("Jeep").value;
		        input4 = document.getElementById("Bus").value;
		        input5 = document.getElementById("Motor").value;
		        input6 = document.getElementById("Drivers").value;		        
		        input7 = document.getElementById("Days").value;

		        van = (input1 * 3000);
		        car = (input2 * 2000);
		        jeep = (input3 * 2000);
		        bus = (input4 * 3000);
		        motor = (input5 * 1500);
		        drivers = (input6 * 500)
		       
		        total1 = (van * input7);
		        total2 = (car * input7);
		        total3 = (jeep * input7);
		        total4 = (bus * input7);
		        total5 = (motor * input7);
		        total6 = (drivers * input7);

		        payment = (total1 + total2 + total3 + total4 + total5 + total6);

		        document.getElementById("payment").innerHTML = (payment);
			}
	</script>


	<form name="serviceForm" action="serviceProcess.php" method="get" onsubmit="return validateForm()">
		<table>
			<h2> Rent a Vehicle Here!</h2>
			<tr>
				<th>Name: </th>
				<td><input type="text" name="Name"></td>
			</tr>

			<tr>
				<th>Address: </th>
				<td><input type="text" name="Address"></td>
			</tr>

			<tr>
				<th>Contact No.</th>
				<td><input type="text" name="Contact_No"></td>
			</tr>

			<tr>
				<th>Vehicle/s</th>
			</tr>
			<tr>
				<th>Van:</th>
				<td>
					<select name="Van" id="Van">
					<option name="Van" value="0" checked >None
					<option name="Van" value="1" >1
					<option name="Van" value="2" >2
					<option name="Van" value="3" >3
					</select>
				</td>
			</tr>

			<tr>
				<th>Car:</th>
				<td>
					<select name="Car" id="Car">
					<option name="Car" value="0" checked >None
					<option name="Car" value="1" >1
					<option name="Car" value="2" >2
					<option name="Car" value="3" >3
					</select>
				</td>
			</tr>

			<tr>
				<th>Jeep:</th>
				<td>
					<select name="Jeep" id="Jeep">
					<option name="Jeep" value="0" checked >None 
					<option name="Jeep" value="1" >1
					<option name="Jeep" value="2" >2
					<option name="Jeep" value="3" >3
					</select>
				</td>
			</tr>

			<tr>
				<th>Bus:</th>
				<td>
					<select name="Bus" id="Bus">
					<option name="Bus" value="0" checked >None
					<option name="Bus" value="1" >1
					<option name="Bus" value="2" >2
					<option name="Bus" value="3" >3
					</select>
				</td>
			</tr>

			<tr>
				<th>Motorcycle:</th>
				<td>
					<select name="Motorcycle" id="Motor">
					<option name="Motorcycle" value="0" checked >None
					<option name="Motorcycle" value="1" >1
					<option name="Motorcycle" value="2" >2
					<option name="Motorcycle" value="3" >3
					</select>
				</td>
			</tr>

			<tr>
				<th>Day/s: </th>
				<td><input type="number" name="Days" id="Days" max="7" placeholder="Maximum of 7 Days"></td>
			</tr>

			<tr>
				<th>Destination: </th>
				<td><input type="text" name="Destination"></td>
			</tr>

			<tr>
				<th>Date of Use:</th>
				<td><input type="Date" name="Date_of_use"></td>
			</tr>

			<tr>
				<th>Driver/s: </th>
				<td>
					<select name="Drivers" id="Drivers">
					<option name="Drivers" value="0" checked >None
					<option name="Drivers" value="1" >1
					<option name="Drivers" value="2" >2
					<option name="Drivers" value="3" >3
					</select>
				</td>
			</tr>

			<tr>
				<td><input type="button" class="btn btn-warning" onclick="multiplyBy()"  value="Check Payment"/></td>
			</tr>
			
			<tr>
				<td>
					<h3><b>TOTAL PRICE: </b><br>
					<span id="payment"></span>
					</h3>
				</td>
			</tr>
		
			<tr>
				<td>
					<input type="submit" name="Submit" value="Confirm Payment" class="btn btn-danger" >
				</td>
			</tr>
			
		</table>

	</form>



</div><!--col-9-->

</div>

</body>
</html>