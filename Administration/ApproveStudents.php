
<?php
  session_start();

       $regno=$_REQUEST["param_regno"];
       $username=null;
       $passwd=null;
       $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
       $stmt=$conn->prepare("update student set regapproval='approved' where regno=?");
       $stmt->bindParam(1,$regno);
            
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
   
