<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
  session_start();
  
   
        
        include './header_link.php';
        include './company_header.php';
        
       $regno=$_REQUEST["param_regno"];
       $username=null;
       $passwd=null;
       $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
       $stmt=$conn->prepare("update student set hiredstatus='hired' where regno=?");
       $stmt->bindParam(1,$regno);
            
        if($stmt->execute())
        {
             echo "<center>";
             echo "<h2>Succesfully Hired</h2>";
             echo "</center>";
                
         }
         else
         {
          echo "<center>";
          echo "<h2>"; echo "UnSuccesfully";echo "</h2>";
          echo "</center>";
                 
         }
            
        ?>
   
