<?php 
if(isset($_POST['name'])){
    $server = "localhost";

    $username = "root";

    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
            die("connection to this database failed due to" . mysqli_connect_error());
    }
   
 //echo "Success connecting to the database"

$name   = $_POST['name'];
$age    = $_POST['age'];
$phno   = $_POST['phno'];
$gender = $_POST['gender'];

 $sql = "INSERT INTO `form1`.`form101` (`name`, `age`, `phno`, `gender`) VALUES ('$name', '$age', '$phno', '$gender')";
 //echo $sql;

 if($con->query($sql)==true){
    //echo "Successfully inserted";
 }
 else{
    echo "ERROR: $sql <br> $con->error";
 }

 $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="main-body">
        <h1>Fill The Form103</h1>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Name">
            <input type="text" name="age" id="age" placeholder="Age">
            <input type="text" name="phno" id="phno" placeholder="Phone Number">
            <input type="text" name="gender" id="gender" placeholder="Gender">

            <button class="btn">Submit</button>
        </form>

    </div>

</body>
<script src="index.js"></script>

</html>