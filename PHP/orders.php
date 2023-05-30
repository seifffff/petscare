
     <?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('connection.php');

$name = $_POST['name']?? '';
$mail = $_POST['email']?? '';
$address = $_POST['address']?? '';
$city = $_POST['city']?? '';
$link = $_POST['link']?? '';
$qty = $_POST['qty']?? '';
$message = $_POST['message']?? '';




$conn = mysqli_connect("localhost", "root", "", "care"); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$dbname = "care"; 
mysqli_select_db($conn, $dbname);

try {
    $stmt = $conn->prepare("insert into orders(name, mail, address, city, link, qty, message) 
           values(?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("sssssis", $name, $mail, $address, $city, $link, $qty, $message);
    
    $stmt->execute();
} catch (mysqli_sql_exception $e) {
     echo "Information imported successfully.";  
}
?>