
<?php
if(isset($_POST["adno"]))
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
  
