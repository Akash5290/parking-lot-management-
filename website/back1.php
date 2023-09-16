<html>
<body>
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$vno=$_POST['vno'];
$cr_pass=$_POST['custid1'];
$co_pass=$_POST['custid2'];
$type2 =$_POST['type2'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname="form";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$tat = "SELECT * FROM register where cr_pass ='$cr_pass'";
$result1 = $conn->query($tat);
if($result1){
    if(mysqli_num_rows($result1)>0)
    {
        $passworderr = "The password already exists";
        echo "<div class = \"hell\"><h1>Registration UnSuccessful</h1><br>
        <a id=\"hi\" href = \"login.php\">Return</a><br><div class = \"dum\"> $passworderr</div></div>";
    }
else { 
$qry = "SELECT * from register where fname ='$fname' and lname = '$lname'";
$result = $conn->query($qry);
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $passworderr = "The User is Already Registered";
echo "<div class = \"hell\"><h1>Registration UnSuccessful</h1><br>
<a id=\"hi\" href = \"login.php\">Return</a><br><div class = \"dum\"> $passworderr</div></div>";
    }
    else{
if((!empty($fname))&&(!empty($lname))&&(!empty($vno))&&(!empty($cr_pass)&&(!empty($co_pass)))&&($cr_pass)==$co_pass)
{$sql = "INSERT INTO register (fname,lname,vno,cr_pass,co_pass,type2)VALUES(?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql))
{
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt,"ssssss",$fname,$lname,$vno,$cr_pass,$co_pass,$type2);
mysqli_stmt_execute($stmt);
$last_id = mysqli_insert_id($conn);
echo "<div class = \"hell\"><h1>Registration Successful</h1><br>
<a id=\"hi\" href = \"book.php\">Return</a></div>";
echo "<div class=\"id\"><h1>YOUR CUST-ID</h1><h1 id =\"id1\">$last_id<h1></div>";
$sql1 = "INSERT INTO data1 (id,fname,lname,vno,cr_pass,co_pass,type2)VALUES(?,?,?,?,?,?,?)";
$stmt1 = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt1,$sql1))
{
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt1,"issssss",$last_id,$fname,$lname,$vno,$cr_pass,$co_pass,$type2);
mysqli_stmt_execute($stmt1);
mysqli_close($conn);
}
else{
$passworderr = "please check if the passwords entered match and all the fields are entered";
echo "<div class = \"hell\"><h1>Registration UnSuccessful</h1><br>
<a id=\"hi\" href = \"login.php\">Return</a><br><div class = \"dum\"> $passworderr</div></div>";
}
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
</body>
</html>