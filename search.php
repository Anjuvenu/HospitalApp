<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="#">MY CARE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="patiententry.php">Patient Entry <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dailyreport.php">Daily Report</a>
        <li class="nav-item">
        <a class="nav-link" href="bloodtest.php">Blood Report</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="search.php">Patient Search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hospitallogin.php">Logout</a>
      </li>
    </ul>
    <span class="navbar-text">
      <!--Navbar text with an inline element-->
    </span>
  </div>
</nav>

<div class="container">
<div class="row">
<div class="col col-12 col-sm-2"> </div>
<div class="col col-12 col-sm-8">
<form method="POST">
<table class= "table table-borderless">
<tr>
        <td> AddarNumber</td>
        <td> <input name="aadar" type="text" class="form-control"> </td>
    </tr>
    <tr>
        <td></td>
        <td>   <button name="btn" class="btn btn-success"> Search </button> </td>
    </tr>
</table>

</div>
<div class="col col-12 -col-sm-2"> </div>
</form>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
    $a=$_POST['aadar'];
   //echo $aadar;
    $connection=new mysqli("localhost","root","","mycare");
     $sql="SELECT  `name`, `address`, `phone`, `hospital`, `aadar`  FROM `patient`
     WHERE aadar=$a";
     $result=$connection->query($sql);

    if($result->num_rows>0)
    
    {

        while($row=$result->fetch_assoc())
        {
            $getname=$row['name'];
            $getaddress=$row['address'];
            $getphone=$row['phone'];
            $gethospital=$row['hospital'];
            $getaadar=$row['aadar'];

            echo"<table class='table'>
            <tr>
            <tr><td>Name</td>
            <td>$getname</td>
            </tr>
            <tr>
            <td>Address</td>
            <td>$getaddress</td>
            </tr>
            <tr>
            <td>Phone</td>
            <td>$getphone</td>
            </tr>
            <tr>
            <td>Hospital</td>
            <td>$gethospital</td>
            </tr>
            <tr>
            <td>Aadar</td>
            <td>$getaadar</td>
            </tr></table>";
        }
        
    }
    else
    {
        echo "No patient has found";
}
        }
?>