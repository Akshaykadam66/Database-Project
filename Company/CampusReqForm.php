<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
$companycode=$_SESSION["companycode"];
?>
         
                
    <html lang="en">
<head>
    
    <?php
        
        include './header_link.php';
        ?>
	<title>Campus Drive Requirement</title>
        <style>
body {font-family: Arial;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password]
{
    width: 200%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: aqua;
}

input[type=text]:focus, input[type=password]:focus 
{
    background-color: #ddd;
    outline: none;
}
hr {
    border: 1px solid blue;
    margin-bottom: 35px;
}

/* Set a style for all buttons */
.button {
    background-color:#008CBA;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    width:300px;
}

.button:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}
</style>
</head>
<body>
    
        <?php
        
       include './company_header.php';
        ?>

        <form method="POST" action="campusreq.php">
           <center>
            <?php
             $cd=date('Y/m/d');
             ?>
               <table>
                   <tr><td><b>Created Date<b></td>
              <td> <input type="text" name="txtdate" value="<?php echo $cd;?>" readonly="true"></td>
               </tr>
                    
                
                    <tr><td><b>Company Code<b></td>
                   <td> <input type="text" name="txtcode" value="<?php echo $companycode;?>" readonly="true"></td>
                    </tr>
                     
                     <tr><td><b>Job Type<b></td>
                    <td><select name="jobtype">
                        <option value="arts">Arts</option>
                         <option value="commerce">Commerce</option>
                           <option value="medical">Medical</option>
                           <option value="engineering">Engineering</option>
                           <option value="architecture">Architecture</option>
                           <option value="hotel">Hotel Management</option>
                        </select></td>
                     </tr>
                     
                   <tr><td><b>POST<b></td>
                    <td><input type="text" name="txtpost" placeholder="Enter The Vacent Post" required></td>
                 </tr>
                    
                
                    <tr><td><b>Salary Package<b></td>
                    <td><input type="text" name="txtsal" placeholder="Enter Salary Package" required></td>
                 </tr>
                     
                
                    <tr><td><b>Minimum Percentage in SSLC<b></td>
                    <td><input type="text" name="txtsslcper" placeholder="Enter Minimum SSLC PErcentage Required"  required></td>
                 </tr>
                   
                
                    <tr><td><b>Degree Minimum Percentage<b></td>
                    <td><input type="text" name="txtdipper" placeholder="Enter Minimum Degree PErcentage Required" required></td>
                 </tr>
                    
                     
                     <tr><td><b>Backlog allowed<b></td>
                    <td><input type="text" name="txtba" placeholder="Backlog Allowed" required></td>
                 </tr>
                     
        
                    <tr><td><b>Requirement<b></td>
                    <td><input type="text" name="txtreq" placeholder="Enter The Requirements" required ></td>
                 </tr>
                     
        
                    <tr><td><b>Interview Date<b></td>
                        <td><input type="text" name="txtindate" placeholder="Interview Date" required></td>
                                         </tr>
                 </table>
                     <br><br>
                     <center>
                     
                     <input type="submit" value="Update" name="btnupdate" class="button">
                     <input type="submit" name="btnaddskills" value="Add Skills" class="button"></a>
                 </center>
                   
        </form> 
    <br><br><br>
       

         </body>
  </html>
 