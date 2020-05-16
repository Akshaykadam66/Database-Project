<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Student Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
body {font-family: Arial;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password]
{
    width: 35%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus 
{
    background-color: #ddd;
    outline: none;
}

h2 {
    text-shadow: 1px 1px;
}

hr {
    border: 1px solid blue;
    margin-bottom: 35px;
}

.textarea
{
    background-color: #ddd;
    display: inline-block;
    border: none;
    background: #f1f1f1;
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
}

.button:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}
</style>
    </head>
    <body>
    
        <form method="POST" action="studentreg.php" style="border:1px solid #ccc" enctype="multipart/form-data">
            <center><h2> <p>Please fill in this form to create an account.</p></h2></center>
                  <hr>
                  
                  <label><b>Regno</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="txtregno" placeholder="Enter Register Number" required>                
                     &nbsp;&nbsp;
                     
                    <label><b>Fname</b></label>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="txtfname" placeholder="Enter First Name" required/>
                    <br>
                    
                     <label><b>Mname </b></label>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <input type="text" name="txtmname" placeholder="Enter Middle Name" required/>&nbsp;&nbsp;&nbsp;&nbsp;
                     
                     <label><b>  Lname</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;
                   <input type="text" name="txtlname"  placeholder="Enter Last Name" required/>
                   <br>
              
                   <label><b> Password</b></label>
                   &nbsp;&nbsp;
                   <input type="password" name="txtpassword"  placeholder="Enter Password" required/>
                   &nbsp;&nbsp;&nbsp;
                   
                   <label><b>Aggregate</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="txtaggregate"  placeholder="Enter Aggregate" required/>
               
                   <br>
                     <label><b> E-mail</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="email" name="txtemailid"  placeholder="Enter Email ID" required/>&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                   <label><b>Gender</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" name="gender" value="M" required>Male &nbsp;
                   <input type="radio" name="gender" value="F" required>Female &nbsp;   
                   <input type="radio" name="gender" value="O" required>Other &nbsp;
                   <br><br>
               
                   <label><b> Phone</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="text" name="txtphone"  placeholder="Enter Phone Number" required/>&nbsp;&nbsp;&nbsp;&nbsp;
               
                   <label><b>CompletionIn</b></label>
                    <input type="text" name="txtcompletionin"  placeholder="Enter Completion Information" required/>&nbsp;&nbsp;
                    <br>
               
                     <label><b>Backlogs</b></label>
                     &nbsp;&nbsp;&nbsp;
                   <input type="text" name="txtbacklogs"  placeholder="Enter Backlogs" required/>&nbsp;&nbsp;&nbsp;&nbsp;
                      
                 
                    
                  <label><b> DOB</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text" name="txtdob"  placeholder="YYYY/MM/DD"  required/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                  
                    
                   <br>
                 
                    <label><b> University</b></label>
                    &nbsp;&nbsp;
                    <input type="text" name="txtuniversity"  placeholder="Enter University" required/>&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <label><b> Resume</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="file" name="txtresumedoc"  required/>
                   <br>
             
          
                    
                    <label><b> Address</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <textarea rows="5" cols="30" name="txtaddress" placeholder="Enter Home Address"  required class="textarea"></textarea>&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  
                    <label><b>Photo</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                    <input type="file" name="txtphoto" required/>
                    <br><br>
                   
                      <label><b> Course Type</b></label>
                    &nbsp;
                    <select name="ct" >
                       <option value="arts" >Arts</option>
                         <option value="commerce" >Commerce</option>
                           <option value="medical" >Medical</option>
                           <option value="engineering" >Engineering</option>
                           <option value="architecture" >Architecture</option>
                           <option value="hotel">Hotel Management</option>
                          </select>
                    <br>
                   
                    &nbsp;
                    
                   <center> <input type="reset" name="btnreset" value="RESET" class="button" required>
                      <input type="submit" name="btnreg" value="Countinue" class="button" >
                      <br><br>
                     
                      <p align="center">By creating an account you agree to our <a href=TermsPolicy.html>Terms & Privacy</a></p>
                       </center>
        </form>
    </body>
</html>
