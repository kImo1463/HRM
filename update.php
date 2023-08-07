<?php
$servername="Localhost";
$username="root";
$password="";
$dbname="trainee";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection=failed".$conn->connect_error);
    }?>
    <!DOCTYPE html>
<html>
<style>
input[type=text]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color:#f2f2f2;
    padding: 40px;
}
</style>
<body>
<div>
  <form action="update.php"method="post">
    <label for="id">Enter Id</label>
    <input type="text" id="id"name="id">
    <label for="name">Enter new data</label>
    <input type="text"id="lname" name="name">
    <input type="submit" value="update">
  </form>
</div>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["id"])){
        echo"please enter id to update";
    }else{
        $id=$_POST["id"];
        $name=$_POST["name"];
        $e="UPDATE registered SET firstname='$name' where id=$id";
        if($conn->query($e))
            echo"updated successfully";
        else echo"not deleted";
        }
    }
    $conn->close();
?>
