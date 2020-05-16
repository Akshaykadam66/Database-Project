<html>
    <body>
<?php
session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$d=date('Y/m/d');
$regno=$_SESSION["regno"];
$postingid=$_REQUEST["param_pid"];

$username=null;
$passwd=null;

$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("insert into application(applieddate,regno,postingid)values(?,?,?)");
$stmt->bindParam(1, $d);
$stmt->bindParam(2, $regno);
$stmt->bindParam(3, $postingid);

if($stmt->execute())
{
   
      echo "<center>";
     echo "<h2>"; echo "Succesfully Applied";echo "</h2>";
     echo "</center>";
}
 else 
{
     echo "Insertion Failed";
}
$conn=null;
?>

 </body>
</html>

