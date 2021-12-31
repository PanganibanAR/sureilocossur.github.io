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
     <a href="admin.php"><button type="button" class="btn btn-dark">
  Home</button></a>
    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
       Registered User
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="adminresidents.php">Resident</a>
      <a class="dropdown-item" href="adminvisitors.php">Visitor</a>
    </div>

  <a href="availedservices.php"><button type="button" class="btn btn-dark">Availed Services</button>
    </div></a>
      <a href="home.html"><button type="button" class="btn btn-dark">Exit</button></a>
      </nav>  <!--toggle navigation-->

</div>

<div class="container-fluid" style="margin-top: 10%;">
 <h1 align="center">RESIDENTS DATA</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Username</th>
      <th>Sex</th>
      <th>Age</th>
      <th>Address</th>
      <th>ContactNo.</th>
      <th>Action</th>
    </tr>
    <?php
      include "myconnection.php";

      $query="SELECT*FROM residents";
      $result=mysqli_query($connect, $query);

      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_array($result)) {
    ?>
    <tr>
      <td><?php echo $row["ID"];?></td>
      <td><?php echo $row["Name"];?></td>
      <td><?php echo $row["Email"];?></td>
      <td><?php echo $row["Username"];?></td>
      <td><?php echo $row["Sex"];?></td>
      <td><?php echo $row["Age"];?></td>
      <td><?php echo $row["Address"];?></td>
      <td><?php echo $row["ContactNo"];?></td>
      <td>
        <a href="residentEdit.php?ID=<?php echo $row["ID"];?>">
        <button class="btn btn-warning">Update</button></a>
        <a href="deleteres.php?ID=<?php echo $row["ID"];?>">
        <button class="btn btn-danger">Delete</button></a>
      </td>
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


