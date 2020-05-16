<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
  session_start();

       $companycode=$_REQUEST["param_companycode"];
       $username=null;
       $passwd=null;
       $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
       $stmt=$conn->prepare("update company set approvalstatus='approved' where companycode=?");
       $stmt->bindParam(1,$companycode);
            
        if($stmt->execute())
        {
             echo "<center>";
             echo "<h2>Succesfully Approved</h2>";
             echo "</center>";
                
         }
         else
         {
          echo "<center>";
          echo "<h2>"; echo "UnSuccesfully";echo "</h2>";
          echo "</center>";
                 
         }
            
        ?>
   
