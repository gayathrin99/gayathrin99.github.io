<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architectural drawings</title>
    <style>
      *{
              margin:0;
              padding:0;
              text-decoration: none;
              box-sizing: border-box;
              list-style: none;
            }
      body{
         font-family: 'Roboto',sans-serif;
         background: #B6D0E2;
         color: black;
         text-align: center;
      }
      br{
        display: block;
        margin: 100px;
      }
      #submitbutton
{
  width:100px;
  height: 50px;
  background-color: Orange;
  color:black;
}
#submitbutton:hover
{
background-color: Grey;
color: white;
}
.topnav{
  background-color: #333;
  overflow: hidden;
}
.topnav a{
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover{
  background-color: #ddd;
  color: black;
}
.topnav a.active{
  background-color: #24bdd1;
  color: white;
}
a{
  text-decoration:none;
  display:inline-block;
  padding: 8px 16px;
}
a:hover{
  background-color: #ddd;
  color:black;
}
.previous{
  background-color: #f1f1f1;
  color: black;
}
.next{
  background-color: #3D75EE;
  color: white;
}
      </style>
</head>
<body>
  <p> What is the dimensions of your site? </p>
  <form>
    <input type="number" id="length" name="length">Length</input>
    <input type="number" id="breadth" name="breadth">Length</input>
    <input type="submit" id="dimensions">
  </form>
  <?php
  ini_set('display_errors',1);
  ini_set('display_startup_errors',1);
  error_reporting(E_ALL);
  ?>
</body>
</html>
