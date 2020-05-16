<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Company Registration</title>
        <?php
        
        include './header_link.php';
        ?>
        <style>
body {font-family: Arial;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password]
{
    width: 150%;
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
    width:250px;
}

.button:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}
</style>
        <title>Company Registration</title>
    </head>
    <body>
                <?php
        
       include './header.php';
        ?>

        <form method="POST" action="companyreg.php"  enctype="multipart/form-data">
            <center>
                <table>
                    <tr><td><h4><b>login ID</b></h4> </td>
                
                   <td> <input type="" name="txtloginid" placeholder="Enter LoginID" required></td>
                    </tr>
                    <br>
                    <tr><td><h4><b>Organization Name</b></h4></td>
                    <td><input type="text" name="txtname" placeholder="Enter Company Name" required></td></tr>
                    <br>
                    
                    <tr><td><h4><b>HR</b></h4></td>
                    <td><input type="text" name="txthr" placeholder="Enter HR Name" required></td>
                    </tr>
                    <br>
                    
                    <tr><td><h4><b>Password</b></h4></td>
                     <td><input type="password" name="txtpwd" placeholder="Enter Password" required></td>
                     </tr>
                    <br>
                    
                    <tr><td><h4><b>Contact</b></h4></td>
                    <td><input type="text" name="txtphone" placeholder="Enter Contact Number" required</td>
                    <br>
                    </tr>
                </table>
                    <br><br>
                        <input type="reset" value="Reset" class="button">&nbsp;&nbsp;&nbsp;
                        <input type="submit" value="Register" name="btnsubmit" class="button">
                    
                    
            </center>
                 
        </form>
      </body>
    </html>

