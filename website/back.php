<html>
<body>
<?php
$custid=$_POST['custid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phno=$_POST['phno'];
$vno=$_POST['vno'];
$time_in=$_POST['time-in'];
$slot_id=$_POST['slot'];
$type1 = $_POST['type'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="form";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$qry = "SELECT * from car_form where fname ='$fname' and lname = '$lname' and custid = $custid";
$result = $conn->query($qry);
$qry1 = "SELECT * from bike_form where fname ='$fname' and lname = '$lname' and custid = $custid";
$result1 = $conn->query($qry1);
 if($result1)
 {
    if (mysqli_num_rows($result)||mysqli_num_rows($result1) > 0) {
        $passworderr = "The User has already Booked a slot";
        echo "<div class = \"hell\"><h1>Booking UnSuccessful</h1><br>
        <a id=\"hi\" href = \"login.php\">Return</a><br><div class = \"dum\"> $passworderr</div></div>";
        }
 else{
    if((!empty($custid))&&(!empty($fname))&&(!empty($lname))&&(!empty($phno))&&(!empty($vno))&&(!empty($time_in))&&(!empty($type1)))
    {
$sql1 = "SELECT id,fname,lname FROM register where id = $custid and fname = '$fname' and lname = '$lname'";
$result2 = $conn->query($sql1);
if($result2)
{
  if(mysqli_num_rows($result2)>0)
    {
$sql = "INSERT INTO car_form (custid,fname,lname,phno,vno,time_in,type1)VALUES(?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql))
{
    die(mysqli_error($conn));
}
else{
    echo "<div class = \"hell\"><h1>Booking Successful</h1><br>
    <a id=\"hi\" href = \"book.php\">Return</a></div>";
    $toot = "UPDATE car_slots SET status1 = 'O',fname = '$fname',lname = '$lname',custid = $custid where slots = '$slot_id'";
    $result1 = $conn->query($toot);
}
mysqli_stmt_bind_param($stmt,"issisis",$custid,$fname,$lname,$phno,$vno,$time_in,$type1);
mysqli_stmt_execute($stmt);
$conn->close();
    }
}
    }
    else{
   if($type1 == 'Car')
    {$passworderr ="please check if you have registered else check if you have entered the correct data and if all the fields are entered";
echo "<div class = \"hell\"><h1>Booking UnSuccessful</h1><br>
<a id=\"hi\" href = \"form1.php\">Return</a><br><div class = \"dum\"> $passworderr</div></div>";
    }
}
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
.dum{
    color:red;
    font-size:25px;
}
</style>
</body>
</html>