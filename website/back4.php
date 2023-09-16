<?php
session_start();
?>
<html>
<head>
<script src="https://kit.fontawesome.com/401469b0fd.js" crossorigin="anonymous"></script>
  </head>
  <body>
      <ul>
        <li  class="bars"><a><i class="fas fa-bars"></i></a></li>
        <li  class="bars"><a href="#about">About</a></li>
        <li  class="bars"><a href="book.php">Park</a></li>
        <li  class="bars"><a href="login.php">Register</a></li>
        <li class ="bars"><a class="active" href ="user.php">Login</a></li>
        <li  class="bars" ><a href="index.php">Home</a></li>
        <a href = "index.php"><img src = "park7.png" alt:"logo" height="100" width="100" /></a>
      </ul>
</html>      
<?php

    $custid = $_POST['custid'];
    $type1 = 'car';
    $type2 = 'bike';

$servername = "localhost";
$username = "root";
$password = "";
$dbname="form";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else
{   $query1 = "SELECT type2,id from register where id = $custid";
    $result = $conn->query($query1);
if($result)
{
    if (mysqli_num_rows($result)>0)
        {
            while($rowData = mysqli_fetch_array($result))
                $type  = $rowData["type2"];
            if($type == "bike")
            {
                $query2 = "SELECT fname,lname,vno from register where id = $custid and type2 = '$type'";
                $result1 = $conn->query($query2);
                if($result1)
                {
                    if (mysqli_num_rows($result1)>0)
                    {
                        while($rowData1 = mysqli_fetch_array($result1))
                       { $fname  = $rowData1["fname"];
                         $lname = $rowData1["lname"];
                         $vno = $rowData1["vno"];  
                $query3 = "SELECT time_in from bike_form where custid = $custid";
                $result2 = $conn->query($query3);
                if($result2)
                {        while($rowData2 = mysqli_fetch_array($result2))
                    $time_in = $rowData2["time_in"];
                        $query4 = "SELECT slots from bike_slots where custid = $custid";
                        $result3 =  $conn->query($query4);
                        if($result3)
                        {   
                            while($rowData3 = mysqli_fetch_array($result3))
                            $slots = $rowData3["slots"];
                            echo "<div id = \"cust\"><div id=\"custid\">Custid: $custid<br><br>Customer Name: $fname $lname<br><br>Vehicle Number: $vno<br><br>Hours-booked : $time_in<br><br>Vehicle-type : $type/scooter<br><br>Slot Booked : $slots</div></div>";
                            echo" <a href = \"data1.php\">PAY</a>";
                        }
                }
                }    
                }
            }
            }
            else
            {
                $query2 = "SELECT fname,lname,vno from register where id = $custid";
                $result1 = $conn->query($query2);
                if($result1)
                {
                    if (mysqli_num_rows($result1)>0)
                    {
                        while($rowData1 = mysqli_fetch_array($result1))
                       { $fname  = $rowData1["fname"];
                         $lname = $rowData1["lname"];
                         $vno = $rowData1["vno"];  
                $query3 = "SELECT time_in from car_form where custid = $custid";
                $result2 = $conn->query($query3);
                if($result2)
                {

                    while($rowData2 = mysqli_fetch_array($result2))
                        $time_in = $rowData2["time_in"];
                        $query4 = "SELECT slots from car_slots where custid = $custid";
                        $result3 =  $conn->query($query4);
                        if($result3)
                        {   
                            while($rowData3 = mysqli_fetch_array($result3))
                            $slots = $rowData3["slots"];
                            echo "<div id = \"cust\"><div id=\"custid\">Custid: $custid<br><br>Customer Name: $fname $lname<br><br>Vehicle Number: $vno<br><br>Hours-booked : $time_in<br><br>Vehicle-type : car<br><br>Slot Booked : $slots</div></div>";
                            echo" <a href = \"data1.php\">PAY</a>";
                        }
                }
                }    
                }
            } 
            }
        }
     else
    {
        $passworderr = "The Entered CustId Is Incorrect";
        echo "<div class = \"hell\"><h1>Logging UnSuccessful</h1><br>
        <a id=\"hi\" href = \"data.php\">Return</a><br><div class = \"dum\"> $passworderr</div></div>";
    }
}
}
?>
<?php 
$custid2 = "$custid"; 
$_SESSION['custid'] = $custid2;
 
?>
<style>
    .hell{
    color:white;
    font-size:30px;
    text-align:center;
    padding-top:100px;
    padding-right:600px;
    padding-left:600px;
}
#hi{
    display:block;
    background-color:white;
    color:black;
    font-size:20px;
    text-decoration:none;
    padding:10px 10px 10px 10px;
    border-radius:20px;
}
#hi:hover{
    color:white;
    transition:0.5s ease-in-out;
    background: rgb(0,0,0,0.7);
}
.dum{
    color:red;
    font-size:25px;
}
    body{
    background-image:url("park6.jpg");
    margin:0;
}
#custid{
    padding:20px 20px;
    text-align:center;
    color:black;
    font-size:30px;
    display:block;
    background-color:white;
    border-radius:30px;
    background: rgb(192,192,192,0.7);
    font-family: "Courier New", monospace;
}
ul{
      background: rgb(192,192,192,0.7);
      padding-top: 2px;
      padding-bottom: 2px;
      margin:0;
      display:block;
      overflow: hidden;
    }
    li {
      padding-right:30px;
      float:right;
      list-style-type:none;
    }
    li a{
      font-family: "Courier New", monospace;
      letter-spacing: 2.5px;
      font-size: 18px;
      border-radius: 30px;
      border-color: black;
      border-width: 1px;
      display:block;
      text-align:center;
      padding: 14px 16px;
      text-decoration: none;
      color:black;
      transition:0.5s ease-in-out;
    }
    li a:hover{
      color:white;
      background: rgb(0,0,0,0.7);
      cursor:pointer;
    }
    a.par {
      color:black;
      font-size: 20px;
      font-weight: 500;
      font-family: "Courier New", monospace;
      background: rgb(255,255,255,0.7);
      border-radius:30px;
      float:left;
      display:block;
      text-decoration: none;
      text-align:left;
      padding: 14px 16px;
      letter-spacing: 5px;
      transition:0.6s ease-in-out;

    }
    a.par:hover{
      color: white;
      background: rgb(0,0,0,0.7);
      box-shadow: 0px 5px 13px #259;
    }
  .bars {
      padding-top:30px;
    }
    a.active{
      border-bottom-style: solid;
      border-width: 5px;
      border-color: black;
    }
    #cust{
        padding-top:40px;
    }
</style>