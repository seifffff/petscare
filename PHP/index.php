<html>
     <body>
          <?php
          $conn = mysqli_connect("localhost","root", "","care");
          if($conn==TRUE)
          echo"Connection Success.";
          else
          echo"Connection Failure.";


          ?>
     </body>
</html>