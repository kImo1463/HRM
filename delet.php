<?php
$servername="Localhost";
$username="root";
$password="";
$dbname="trainee";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection=failed".$conn->connect_error);
    }?>
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
  <form action="delet.php"method="post">
    <label for="id">Enter Id</label>
    <input type="text" id="id"name="id">
    <input type="submit" value="delete">
  </form>
</div>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["id"])){
        echo"please enter id to delete";
    }else{
        $id=$_POST["id"];
        $e="DELETE FROM registered where id=$id";
        if($conn->query($e))
            echo"deleted successfully";
        else echo"not deleted";
        }
    }
    $conn->close();
?>
