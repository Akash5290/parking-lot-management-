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
        <li class ="bars"><a href ="user.php">Login</a></li>
        <li  class="bars" ><a class="active" href="#home">Home</a></li>
        <a href = "index.php"><img src = "park7.png" alt:"logo" height="100" width="100" /></a>
      </ul>
      <div class="pink">
  <p class="note" style = color:white>PARKEX</p>
  <p class="car"style = color:white>The<br>Advanced Parking Tech</p>
  <p><a class = "par" href="book.php">START BOOKING ></a></p>
</div>
    <style>
    body{
      background-color: rgba(192,192,192, 0.8);
      margin:0;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    p.note{
      text-align :LEFT;
      text-shadow: 2px 2px 5px BLACK;
      font-family: "Courier New", monospace;
      font-size: 100px;
      letter-spacing: 20px;
      vertical-align: baseline;
    }
    p.car{
      text-align :LEFT;
      text-shadow: 2px 2px 5px BLACK;
      font-family: "Courier New", monospace;
      font-size: 30px;
      padding-left: 10px;
      vertical-align: baseline;
    }
    .pink{
        letter-spacing: 2px;
        background-image: url('park6.jpg');
        background-size:stretch;
        height:100px;
        padding-top: 30px;
        padding-right: 10px;
        padding-bottom: 450px;
        padding-left: 20px;
        list-style-type:none;
        cursor:default;
    }
    ul{
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
    </style>
  </body>
</html>
