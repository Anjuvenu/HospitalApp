<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
<div class="row">
<div class="col col-12 col-sm-2"> </div>
<div class="col col-12 col-sm-8">
<form method="POST">
<table class= "table table-borderless">
<tr>
        <td> Aadhar Number</td>
        <td> <input name="adno" type="text" class="form-control"> </td>
    </tr>

    <tr>
        <td>Password</td>
        <td> <input name="pass" type="text" class="form-control"></td>
    </tr>

    <tr>
        <td></td>
        <td>   <button name="btn" class="btn btn-primary"> login </button> </td>
    </tr>
</table>
</form>
</div>
<div class="col col-12 -col-sm-2"> </div>



</body>
</html>
<?php
if(isset($_POST["btn"]))
{
    $a=$_POST['adno'];
    $p=$_POST['pass'];
   //echo $aadharnumber;
   //echo $password;
    $connection=new mysqli("localhost","root","","mycare");
    $sql="SELECT `id`, `name`, `address`, `phone`, `hospital`, `aadar`, `password` FROM `patient`
    WHERE aadar='$a' and password='$p'";
     $result=$connection->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            echo "<script> alert ('LOGIN') </script>";  


        }
        //echo "SUCCESS";
    }
    else
    {
        //echo "ERROR"     ;
        echo "<script> alert ('LOGIN FAILED') </script>";
    }
}
?>
  
