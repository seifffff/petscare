
     <?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$name = $_POST['name']?? '';
$mail = $_POST['email']?? '';
$pwd = $_POST['password']?? '';
$num = $_POST['num']?? '';




$conn = mysqli_connect("localhost", "root", "", "care");
if ($conn->connect_error) {
     die('connection failed : '.$conn->connect_error);
} else {
     $stmt = $conn->prepare("insert into users(name, email, password, phone)
          values(?, ?, ?, ?)");
     $stmt->bind_param( "sssi",$name, $mail, $pwd, $num );
     $stmt->execute();
     echo "Successful Registration.";
     $stmt->close();
}
?>