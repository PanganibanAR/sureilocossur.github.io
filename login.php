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
  <a href="login.php">About</a>
  <a href="login.php">Services</a>
  <a href="login.php">Municipalities</a>
  <a href="login.php">Admin</a>
  <a href="feedback.php">Feedback</a>
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
</div>
  </nav>


<div class="container-fluid">

  <div class="row content">

    <div class="col-md-4  side">
        

       
    </div>  <!-- col sm 4 -->

    <div class="col-sm-8 maincontent">

     <?php
    if(isset($_GET["error"])){
      $error=$_GET["error"];
    }
    else{
      $error="";
    }
    $message="";
    if($error=="failed"){
      $message="Failed to login, please login again";
    }
  ?>
  <p style="color:red"><?php echo $message;?></p>
   <form name="myForm" action="loginProcess.php" onsubmit="return validateName()" onsubmit="return myFunction()" method="post">
    <table align="center">
      <h2 align="center">Please Login Here!</h2>  <br>
      <tr>
        <th>Username</b></th>
        <td><input type="text" name="username" size="20" placeholder="username"></td>
      </tr>

      <tr>
        <th>Password</b></th>
        <td><input type="password" id="numb" name="password" size="20" placeholder="password"></td>
      </tr>
      <tr>
        <td>&nbsp</td>
         <th><input type="submit" class="btn btn-success" name="login"  action="loginProcess.php" onclick="return myFunction()" onclick="return validateName()" value="Login"></th>
      </tr>
    </table>
  </form>
 <br> <p align="center"><b>Don't have an account yet?</b></p>
<p align="center"><a href="registerres.php"><button type="button" class="btn btn-light"><b> 
   Register as Resident</b></button></a></p><p align="center">
   <a href="registervis.php"><button type="button" class="btn btn-light"><b>
  Register as Visitor</b></button></a></p>


</div><!--col-9-->

</div>

</body>
</html>