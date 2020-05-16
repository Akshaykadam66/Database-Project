<html>
    <body>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$regno=$_POST["txtreg"];
$qualification=$_POST["Qualification"];
$percentage=$_POST["txtpercentage"];

$username=null;
$passwd=null;

$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("insert into educationprofile(regno,qualification,percentage)values(?,?,?)");

$stmt->bindParam(1,$regno);
$stmt->bindParam(2,$qualification);
$stmt->bindParam(3,$percentage);

if(isset($_POST["btnReg"]))
{
if($stmt->execute())
   {
      header("Location:studentlogin.html");
   }
 else 
  {
     echo "<center>";
     echo "<h2>";echo "Failed";echo "</h2>";
     echo "</center>";
  }
}
if(isset($_POST["btnaddskills"]))
 {
    if($stmt->execute())
 {
      header("Location:addskills_webpage.php");
 }
 else 
  {
     echo "<center>";
     echo "<h2>";echo "Failed";echo "</h2>";
     echo "</center>";
  }
}

$conn=null;

?>
</body>
</html>
