<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

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
        <table class="table table-borderless"> <tr>
               <td> Patient Name</td>
               <td><input name="pn" type="text" class="form-control"></td>
           </tr>
           <tr>
               <td>Address</td>
               <td><input name="adrs" type="text"  class="form-control" ></td>
           </tr>
           <tr>
               <td>Phone Number</td>
               <td><input name="phno" type="text" class="form-control" ></td>
           </tr>
           <tr>
               <td>Hospital</td>
               <td><input name="hsp" type="text" class="form-control" ></td>
           </tr>
           <tr>
               <td>Aadhar</td>
               <td><input name="adr" type="text" class="form-control"></td>
           </tr>
                <td>Password</td>
                <td><input name="pswd" type="text" class="form-control"></td>
            </tr>
         <tr>
         <td></td>
                <td><button name="btn" class="btn btn-success">REGISTER</button></td>
                <td></td>
            </tr>
        </table>
</form>

</body>
</html>
<?php
if(isset($_POST["btn"]))
{
    $p=$_POST['pn'];
    $a=$_POST['adrs'];
    $n=$_POST['phno'];
    $h=$_POST['hsp'];
    $r=$_POST['adr'];
    $d=$_POST['pswd'];
    //echo $patientName;
    //echo $adress;
    //echo $phoneno;
    //echo $hosp;
    //echo $aadhar;
    //echo $password;
    $connection=new mysqli("localhost","root","","mycare");
    $sql= "INSERT INTO `patient`(`name`, `address`, `phone`, `hospital`, `aadar`, `password`)
     VALUES('$p','$a','$n','$h','$r','$d')";
    $result=$connection->query($sql);
    if($result===true)
    {
        //echo "SUCCESS";
        echo "<script> alert ('SUCCESSFULLY INSERTED') </script>";  
    }
    else
    {
        //echo "ERROR";
        echo "<script> alert ('NOT SUCCESSFULLY INSERTED') </script>";
    }
}
?>
