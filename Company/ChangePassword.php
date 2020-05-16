<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
  session_start();
 
        
        $currentpwd=$_POST["txtcurrentpassword"];
        $newpwd=$_POST["txtnewpassword"];
       

        $companycode=$_SESSION["companycode"];
        $password=$_SESSION["password"];
        if($password==$currentpwd)
        {
            $username=null;
            $passwd=null;
            $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
            $stmt=$conn->prepare("update company set password=? where companycode=?");
            $stmt->bindParam(1,$newpwd);
            $stmt->bindParam(2,$companycode);
            
            if($stmt->execute())
            {
                $_SESSION["password"]=$newpwd;
              echo "<center>";
             echo "<h2>Password Changed Successfully</h2>";
             echo "</center>";
            }
            else
            {
             echo "<center>";
             echo "<h2>Password Change Failed</h2>";
             echo "</center>";
            }
        }     
        $conn=null;
?>

   
