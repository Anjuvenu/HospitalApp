<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
<div class="container"></div>
<div class="row"></div>
<div class="col col-12 col-col-sm-2"> </div>
<div class="col col-12 col-col-sm-8"></div>
<table class= "tabel table-borderless">
<tr>
        <td> Username</td>
        <td> <input name="uname" type="text" class="form-control"> </td>
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
<div class="col col-12 col-col-sm-2"> </div>
        </div>
</form>
</body>
</html>
<?php
if(isset($_GET["btn"]))
{
$u=$_GET["uname"];
$p=$_GET["pass"];
//echo $u;
//echo"<br>";
//echo $p;
echo "<table class='table'>
<tr>
    <td>User Name</td>
    <td>$u</td>
</tr>
<tr>
    <td>Password</td>
    <td>$p</td>
</tr>
</table>";
}
?>

    
</body>
</html>