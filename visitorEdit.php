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
<link rel="stylesheet" type="text/css" href="side.css">

<style> 
input[type=submit]{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 12px 28px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
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
        <a href="admin.php"><button type="button" class="btn btn-dark">
  Home</button></a>
    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
       Registered User
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="adminresidents.php">Resident</a>
      <a class="dropdown-item" href="adminvisitors.php">Visitor</a>
    </div>

  <a href="about.html"><button type="button" class="btn btn-dark">Availed Services</button>
    </div></a>
     <a href="index.html"><button type="button" class="btn btn-dark">Exit</button>
    </div></a>
      </nav>
</div>


<div class="container-fluid">

  <div class="row content">

    <div class="col-md-4  side">
        

       
    </div>  <!-- col sm 4 -->


    <div class="col-sm-8 maincontent">
      <h3>Update Residents Data Here!</h3>

 <?php
      include "myconnection.php";
      $id = $_GET['ID'];
      $query = "SELECT * FROM visitors WHERE id=$id";
      $result = mysqli_query($connect, $query);
  ?>
  <form action="editProcessvis.php" method="get">
    <table>
      <?php
          while($row=mysqli_fetch_array($result)){
      ?>
      <tr>
        <th>ID:</th>
        <td><input type="text" name="myid" value="<?php echo $row['ID'];?>"></td>
      </tr>
      <tr>
        <th>Name:</th>
        <td><input type="text" name="myname" value="<?php echo $row['Name'];?>">
        </td>
      </tr>
      <tr>
        <th>Address:</th>
        <td>
        <textarea name="myaddress" rows="5" cols="20"><?php echo $row['Address'];?>
        </textarea>
        </td>
      </tr>

      <tr>
        <th>Contact No.:</th>
        <td><input type="text" name="contact" value="<?php echo $row['ContactNo'];?>">
        </td>
      </tr>

      <tr>
       <td></td> <td><input type="submit" name="save" value="Save Changes"></td>
      </tr>
      <?php

              }

      ?>
    </table>
    
  </form>



</div><!--col-9-->

</div>

</body>
</html>


