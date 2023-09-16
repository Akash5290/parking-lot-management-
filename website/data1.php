<?php
    session_start();
?>

<?php  
$custid = $_SESSION['custid'];
?>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="form";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    $query1 = "SELECT time_in from bike_form where custid = $custid";
    $result1 = $conn->query($query1);
    if($result1)
    {
        if (mysqli_num_rows($result1)>0)
        { 
            while($data = mysqli_fetch_array($result1))
            $time_in = $data['time_in'];
            $amt = "<div id = \"time_in\"></div>";
            $tre = $amt;
            echo $tre;
            $qry = "UPDATE data1 set AmountDue = '$tre' where id = '$custid'";
            $result2 = $conn->query($qry);
            if($result2)
            {
            }
           

            
        }
    }
}
?>
<script type="text/JavaScript">
 let y =  "<?php echo"$time_in";?>";
 int var x = myFunction(y);   
document.getElementById("time_in").innerHTML = x;
function myFunction(a) {
    return a * 30;             
}
</script>
