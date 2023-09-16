<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>RNS Parking</title>
    <script src="https://kit.fontawesome.com/401469b0fd.js" crossorigin="anonymous"></script>
  </head>
  <body>
      <ul>
        <li  class="bars"><a href="#about">About</a></li>
        <li  class="bars"><a href="book.php">Park</a></li>
        <li class ="bars"><a href ="user.php">Login</a></li>
        <li  class="bars" ><a class="active" href="index.php">Home</a></li>
        <a href = "index.php"><img src = "logo2.png" alt:"logo" height="100" width="100" /></a>
      </ul>
    <div class = "hi">
    <p class = "hig">PARKING FORM</p>
    <div class = "hell">
  <form action = "back.php" method = "post">
  <label for="fname">First name:</label>
  <input type="text" id = "fname" name="fname">
  <label for="lname">Last name:</label>
  <input type="text" id = "lname" name="lname"><br><br>
  Cust id: <input type="password" id="myInput" name = "custid"><br>
            <input type="checkbox" onclick="myFunction()">Show<br><br>
  <label for="phno">Phone number:</label>
  <input type="tel" id = "phno" name="phno"><br><br>
  <label for="vehicle.no">Vehicle number</label>
  <input type="text" id= "vno" name="vno"><br><br>
  Hours: <input type ="number" id="time-in" name = "time-in"><br><br>
  Slot-id:<input type ="text" id ="slot-id" name ="slot" value ="A"><br><br>
  Type:<input type = "text" READONLY id ="Type" name ="type" value ="Car"><br><br>
  <input type="submit" id = "submit" value="Submit">
</form>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type ==="password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</div>
</div>
    <style>
      ul{
      padding-top: 12px;
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
      color:white;
      transition:0.5s ease-in-out;
    }
    li a:hover{
      color:white;
      background: rgb(0,0,0,0.7);
      cursor:pointer;
    }
    .hig{
        font-family: "Verdana",sans-serif;
        letter-spacing: 2.5px;
        font-size: 15px;
        display:block;
        padding-top:10px;
        padding-bottom:10px;
        border-radius:15px 50px 30px 5px;
        background: rgb(255,255,255,0.9);
        text-align:center;
        color:black;
    }
    .hi{
        text-align:center;
    }
    .hell{
        color:white;
        display:block;
        font-family: "Verdana",sans-serif;
        letter-spacing: 2.5px;
        font-size: 15px;
        border-radius:15px 50px 30px 5px;
        background: rgb(128,128,128,0.9);
        padding-top:20px;
        padding-bottom:20px;
    }
    body{
        background-image:url("park6.jpg");
        padding-left:400px;
        padding-right:400px;
    }
    #fname{
        border-radius:15px 50px 30px 5px;
    }
    #lname{
        border-radius:15px 50px 30px 5px;
    }
    #submit{
        font-family: "Verdana",sans-serif;
        border-radius:20px;
        font-size:15px;
    }
    #submit:hover{
        transition:0.5s ease-in-out;
        cursor:pointer;
        background: rgb(0,0,0,0.7);
        color:white;
    }
    #phno{
        border-radius:15px 50px 30px 5px;
    }
    #vno{
        border-radius:15px 50px 30px 5px;
    }
    #myInput{
        border-radius:15px 50px 30px 5px;
    }
    #Type{
      border-radius:15px 50px 30px 5px;
    }
    #time-in{
      border-radius:15px 50px 30px 5px;
    }
    #slot-id{
      border-radius:15px 50px 30px 5px;
    }
</style>
</body>
</html>