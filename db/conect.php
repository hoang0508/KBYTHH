<!-- kết nối cơ sở dữ liệu -->
<?php
// $con = mysqli_connect("localhost","username","password","db_name");

// // Check connection
// if (mysqli_connect_errno()) {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   exit();
// }
?>

<?php
// $con = mysqli_connect("localhost","root","","khaibao_yte");

// // Check connection
// if (mysqli_connect_errno()) {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   exit();
// }
?>

<?php
$servername = "localhost";
$database = "khaibao_yte";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>