<!DOCTYPE HTML>
<html >
<head>
  <title>TODO</title>
  <meta name=viewport content='width=640'>
  <link rel="shortcut icon" href="images/favicon.png">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
  <link rel="stylesheet" href="jquery/css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <script src="jquery/js/jquery.js"></script>
  <script src="jquery/js/jquery-ui.js"></script>
  <script src="js/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body style="background-color:powderblue;">
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="#">TODO</a>
        <div class="nav-collapse collapse">
          <ul class="nav">
            <li><a href="about.html">About</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="hero-unit">
      <img class="img-responsive" src="images/TODO.png">
    </div>
      <div class='row'>
        <div class='span3'  style='background-color: #DFE1E6'>
        <!-- <form form class='form-search form-myform'> -->
          <h3>TODO List</h3>

            <table>
            <tr>
              <th>Abc</th>
            </tr>
            <tr>
            <th>Test</th>
            </tr>
            <tr>
 
            </tr>
            </table>

        <botton id='btn1'><a href='add_todo.php'>Add another card</a></button>         
       </form>
        

      </div>

      <div class="span3" style='background-color: #DFE1E6'>
<!--         <form class="form-search form-myform">
 -->            <h3>Test Table</h3>
            <table>
            <tr>
              <th>Abc2</th>
            </tr>
            <tr>
            <th>Test2</th>
            </tr>
            <tr>
   
            </tr>
            </table>
        <botton id='btn1'><a href='add_todo.php'>Add another card</a></button> 
        </form>
      </div>

      <div class="span3" style='background-color: #005C91'>
  <!--         <form class="form-search form-myform">
 -->        <botton id='btn1'><a href=''>Add another list</a>
        </button>
      </form>
      </div> 
  <script src="bootstrap/js/bootstrap.js"></script>

 <!--  <?php
  include("dbconnect.php");
$x = mysqli_query($con, "SELECT * FROM todo WHERE `todo`.`done`=0 ORDER BY `date`");

echo "Số lượng bài viết: ".mysqli_num_rows($x);
while ($post = mysqli_fetch_array($x, MYSQLI_ASSOC)) {
    echo "<tr><td>".$post["desc"]."</td><td>".$post["date"]."</td></tr>";
}
?> -->
</body>
</html>
