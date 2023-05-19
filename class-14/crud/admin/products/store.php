
<?php


print_r($_POST);
$_title =  $_POST['title'];
echo $_title;
echo "<br>";


                    // connection to database

// declare database variable
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername; dbname=bitm_11", $username, $password);
  // set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// Insert query
$query = "INSERT INTO `products` (`title`) VALUES (:title)"; // :title = title er placeholder(:column er name)

// query ta connect korte hbe
$stmt = $conn-> prepare($query);
// ekhon eta bind korte hbe

$stmt->bindParam(':title', $_title);
$result = $stmt->execute();

var_dump($result);

?>
