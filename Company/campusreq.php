<?php
$date=$_POST["txtdate"];
$code=$_POST["txtcode"];
$post=$_POST["txtpost"];
$salary=$_POST["txtsal"];
$sslcper=$_POST["txtsslcper"];
$dipper=$_POST["txtdipper"];
$ba=$_POST["txtba"];
$req=$_POST["txtreq"];
$indate=$_POST["txtindate"];
$jobtype=$_POST["jobtype"];

$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);

$stmt=$conn->prepare("insert into campusdrive(createddate,companycode,post,salarypackage,sslcminpercentage,dipminpercentage,backlogsallowed,requirement,interviewdate,jobtype)values(?,?,?,?,?,?,?,?,?,?)");

$stmt->bindParam(1,$date);
$stmt->bindParam(2,$code);
$stmt->bindParam(3,$post);
$stmt->bindParam(4,$salary);
$stmt->bindParam(5,$sslcper);
$stmt->bindParam(6,$dipper);
$stmt->bindParam(7,$ba);
$stmt->bindParam(8,$req);
$stmt->bindParam(9,$indate);
$stmt->bindParam(10,$jobtype);




if(isset($_POST["btnupdate"]))
{
if($stmt->execute())
   {
    $postingid=$conn->lastInsertId();
      header("Location:companywelcome.php");
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
        $postingid=$conn->lastInsertId();
      header("Location:skillreq_form.php?param_posstingid=$postingid");
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
