<?php
  include "myconnection.php";

  $id = $_GET["myid"];
  $name = $_GET["myname"];
  $address = $_GET["myaddress"];
   $contact = $_GET["contact"];

 
 $query = "UPDATE  residents SET Name='$name', Address='$address', ContactNo='$contact' WHERE id=$id";

 if (mysqli_query($connect, $query)) {
        header('Location:adminresidents.php');
    }
    else{
      echo "Record failed to update <br>". mysqli_error($connect);
    }
    mysqli_close($connect);

?>