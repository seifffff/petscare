
     <?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('connection.php');

$name = $_POST['name']?? '';
$mail = $_POST['email']?? '';
$phone = $_POST['phone']?? '';
$pass = $_POST['pass']?? '';
$upload = $_FILES['upload']?? '';




$conn = mysqli_connect("localhost", "root", "", "care"); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$dbname = "care"; 
mysqli_select_db($conn, $dbname);
try {
    $stmt = $conn->prepare("insert into host(name, mail, phone, pass, path) 
           values(?, ?, ?, ?, ?)");
    
    $stmt->bind_param("ssiss", $name, $mail, $phone, $pass, $upload);
    
    $stmt->execute();
    $upload = $stmt->fetch();
} catch (mysqli_sql_exception $e) {
     echo " Information imported successfully.";  
}
?>