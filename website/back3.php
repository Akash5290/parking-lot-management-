<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pass  = $_POST['pass1'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname="form";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$tat = "SELECT * FROM register where fname='$fname'and lname='$lname'and cr_pass = '$pass'";
$result1 = $conn->query($tat);
if($result1)
{
    if(mysqli_num_rows($result1) > 0) 
        {
            echo "<div class = \"hell\"><h1>Welcome $fname</h1><br><br>
            <a id=\"hi\" href = \"data.php\">Proceed  ></a><br>
            <a id=\"hi\" href = \"user.php\">Return</a><br></div>";
        }
    else{
        $passworderr = "Please Register First or Check The Fields entered";
        echo "<div class = \"hell\"><h1>Logging UnSuccessful</h1><br>
        <a id=\"hi\" href = \"user.php\">Return</a><br><div class = \"dum\"> $passworderr</div></div>";
    }
}
?>
<style>
#hi{
    display:block;
    background-color:white;
    color:black;
    font-size:20px;
    text-decoration:none;
    padding:10px 10px 10px 10px;
    border-radius:20px;
}
.hell{
    color:white;
    font-size:30px;
    text-align:center;
    padding-top:100px;
    padding-right:600px;
    padding-left:600px;
}
#hi:hover{
    color:white;
    transition:0.5s ease-in-out;
    background: rgb(0,0,0,0.7);
}
body{
    background-image:url("park6.jpg");
}
.id{
    color:white;
    text-align:center;
}
#id1{
    display:block;
    background-color:white;
    color:black;
}
.dum{
    color:red;
    font-size:25px;
}
</style>