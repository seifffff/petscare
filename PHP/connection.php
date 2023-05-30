<?php 
 $conn = mysqli_connect("localhost","root", "","care");
          if($conn==TRUE)
          echo"Success.";
          else
          echo"Connection Failure.";
?>