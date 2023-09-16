
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>RNS Parking</title>
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
      <p class = "hig">USER INFO</p>
      <p class = "hi"> Please Enter Your Custid To Check Details</p>
      <form action = "back4.php" method = "post">
      <div class="hell">Custid  :    <input type="number" id="custid" name = "custid"><br><br>
      <input type="submit" id = "submit" value="Submit"><br><br></div>
      </form>
      <style>
      body{
        background-image:url("park6.jpg");
        margin:0;
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
        background-color:white;
    }
    .hi{
      font-family: "Verdana",sans-serif;
      color:red;
      text-align:center;
      font-size: 18px;
      padding-top:100px;

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
    .hell{
        text-align:center;
        color:white;
        font-size:20px;
    }
    #custid{
        color:black;
        border-radius:50px;
    }
    </style>
</body>
</html>
