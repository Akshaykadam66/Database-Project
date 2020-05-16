<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$loginid=$_POST["txtloginid"];
$cname=$_POST["txtname"];
$hr=$_POST["txthr"];
$password=$_POST["txtpwd"];
$contact=$_POST["txtphone"];

$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("insert into company(loginid,companyname,hr,password,phone,approvalstatus)values(?,?,?,?,?,'NA')");
$stmt->bindParam(1,$loginid);
$stmt->bindParam(2,$cname);
$stmt->bindParam(3,$hr);
$stmt->bindParam(4,$password);
$stmt->bindParam(5,$contact);

if($stmt->execute())
{
     
      echo "<center>";
     echo "<h2>"; echo "Succesfull";echo "</h2>";
     echo "</center>"; 
     header("Location:companywelcome.php");

}
 else 
{
    echo "<center>";
     echo "<h2>";echo "Failed";echo "</h2>";
     echo "</center>";
}
$conn=null;
?>
