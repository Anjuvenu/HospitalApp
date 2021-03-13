<! html>
<html lang="en">
<heaDOCTYPEd><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

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
               <td> Patient id</td>
               <td><input name="pnid" type="text" class="form-control"></td>
           </tr>
           <tr>
               <td>Symptoms</td>
               <td><input name="sypt" type="text"  class="form-control" ></td>
           </tr>
           <tr>
               <td>Diseases</td>
               <td><input name="dis" type="text" class="form-control" ></td>
           </tr>
           <tr>
               <td>Current Status</td>
               <td><input name="cust" type="text" class="form-control"></td>
           </tr>
           <tr>
               <td>Doctor Remark</td>
               <td><input name="docr" type="text" class="form-control"></td>
           </tr>
           <tr>
               <td>Date</td>
               <td><input name="date" type="date"  class="form-control" ></td>
            </tr> <tr>
            <td></td>
                <td><button name="btn" class="btn btn-success">SUBMIT</button></td>
            </tr>
 </table></div>
            <div class="col col-12 col-col-sm-2"> </div>
        </div>
    </div>
    <div class="col col-12 -col-sm-2"> </div>


</body>

</form>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
    $i=$_POST['pnid'];
    $s=$_POST['sypt'];
    $d=$_POST['dis'];
    $c=$_POST['cust'];
    $r=$_POST['docr'];
    $e=$_POST['date'];
    //echo $patientName;
    //echo $adress;
    //echo $phoneno;
    //echo $hosp;
    //echo $aadhar;
    //echo $password;
    $connection=new mysqli("localhost","root","","mycare");
    $sql= "INSERT INTO `dailyreport`( `patientid`, `symptoms`, `disease`, `currentstatus`, `doctorremark`, `date`)
     VALUES('$i','$s','$d','$c','$r','$e')";
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
