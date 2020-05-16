<html>
    <body>

<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$regno=$_SESSION["sess_regno"];
$additionalskills=$_POST["txtskills"];

$username=null;
$passwd=null;

$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("insert into studentskills(regno,additionalskills)values(?,?)");

$stmt->bindParam(1,$regno);
$stmt->bindParam(2,$additionalskills);

if($stmt->execute())
{
      
      header("Location:studentlogin.html?param_pregno=$regno");
}
 else 
{
      echo "<center>";
     echo "<h2>";echo "Failed";echo "</h2>";
     echo "</center>";   
 }
$conn=null;

?>
</body>
</html>
