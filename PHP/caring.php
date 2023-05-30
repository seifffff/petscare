
     <?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('connection.php');

$name = $_POST['name']?? '';
$pet = $_POST['pet']?? '';
$mail = $_POST['email']?? '';
$num = $_POST['num']?? '';
$date = '2020-01-01' ?? '';
$loc = $_POST['location']?? '';
$drop = $_POST['drop-location']?? '';
$qty = $_POST['pet-qty']?? '';




$conn = mysqli_connect("localhost", "root", "", "care"); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$dbname = "care"; 
mysqli_select_db($conn, $dbname);

try {
    $stmt = $conn->prepare("insert into caring(name, pet, mail, phone, date, location, DropLoc, qty) 
           values(?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("sssisssi", $name, $pet, $mail, $num, $date, $loc, $drop, $qty);
    
    $stmt->execute();
} catch (mysqli_sql_exception $e) {
     echo "Information imported successfully.";  
}
?>