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
<link rel="stylesheet" type="text/css" href="side.css">

</head>
<body>


<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#"> <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="registerres.php">About</a>
  <a href="registerres.php">Services</a>
  <a href="registerres.php">Municipalities</a>
  <a href="registerres.php">Admin</a>
  <a href="registerres.php">Feedback</a>
  </div>
</div><!--sidenav-->

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; <b>Sure Sur</b></span>
</div><!--main--> </a>
    
   </button> 
    <div class="collapse navbar-collapse"></div>
   <div class="btn-group">
   	<a href="index.html"><button type="button" class="btn btn-dark">
  Home</button></a>
  <a href="login.php"><button type="button" class="btn btn-dark">
  Login</button></a>

    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
       Register
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="registerres.php">Resident</a>
      <a class="dropdown-item" href="registervis.php">Visitor</a>
    </div>
  <a href="about.html"><button type="button" class="btn btn-dark">About</button>
    </div></a>
      <a href="feedbackForm.php"><button type="button" class="btn btn-dark">Logout</button>
    </div></a>
</div>
  </nav>


<div class="container-fluid">

  <div class="row content">

    <div class="col-md-4  side">
        

       
    </div>  <!-- col sm 4 -->

    <div class="col-sm-8 maincontent">

     <form name="registerForm" action="registerProcessres.php" method="get" onsubmit="return validateForm()">
			<table align="center">
				<h2 align="center">Please Register Here!</h2>  <br>
				<tr>
					<th>Name: </th>
					<td><input type="text" name="Name"></td>
				</tr>

				<tr>
					<th>Email: </th>
					<td><input type="text" name="Email" placeholder="ex: qwerty@gmail.com"> </td>
				</tr>

				<tr>
					<th>Username: </th>
					<td><input type="text" name="Username"></td>
				</tr>

				<tr>
					<th>Password: </th>
					<td><input type="Password" name="Password" minlength="4" required></td>
				</tr>

				<tr>
					<th>Sex: </th>
					<td><input type="radio" name="Sex" value="Male"><b>Male</b><input type="radio" name="Sex" value="Female"><b>Female</b></td>
				</tr>

				<tr>
					<th>Age:</th>
					<td><input type="text" name="Age"></td>
				</tr>

				<tr>
					<th>Address: </th>
					<td><input type="text" name="Address"></td>
				</tr>

				<tr>
					<th>Contact No.: </th>
					<td><input type="text" name="ContactNo"></td>
				</tr>

				<tr> <td>&nbsp</td>
					<th> <input type="submit" class="btn btn-warning" name="register" value="Register"> </th>
				</tr>
			</table>
		</form>
<p align="center"><b>Already have an account? <a href="login.php">Login Here!</a></b></p>

</div><!--col-9-->

</div>

</body>
</html>