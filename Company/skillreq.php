<?php

$postingid=$_POST["txtid"];
$skill=$_POST["txtskill"];

$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("insert into skillreq(postingid,skillneeded)values(?,?)");

$stmt->bindParam(1,$postingid);
$stmt->bindParam(2,$skill);

if($stmt->execute())
{
     
      echo "<center>";
       header("Location:companywelcome.php");
     echo "<h2>";echo "Succesfull";echo "</h2>";
     echo "</center>";  

}
 else 
{
    echo "<center>";
     echo "<h2>";echo "Failed";echo "</h2>";
     echo "</center>";
}
$conn=null;

?>
