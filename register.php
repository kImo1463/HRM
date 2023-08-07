

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trainee";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}?>
<html>
    <body>
        <h2>Registration form</h2>
        <form action="register.php"method="post">
firstname:<input type="text"name="name"><br>
lastname:<input type="text"name="lname"><br>
<input type="submit" value="register">
        </form>
    </body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
if((empty($_POST["name"]))){
    echo "first name is required";
}
else{
// prepare and bind
$stmt = $conn->prepare("INSERT INTO registered (firstname, lastname) VALUES (?, ?)");
$stmt->bind_param("ss", $firstname, $lastname);

// set parameters and execute
$firstname = $_POST["name"];
$lastname = $_POST["lname"];
$stmt->execute();
echo "Registered successfully";
}
}
?>


