<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Change Password</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <style>
body {font-family: Arial;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password]
{
    width: 130%;
    padding: 13px;
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

/* Set a style for all buttons */
.button {
    background-color:#008CBA;
    border: none;
    color: white;
    padding: 15px 36px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button:hover {
color: blue;
background: black;
border: 1px solid #fff;
}
</style>


        
    </head>
    <body>
        <center>
        <h2>Password Alteration</h2>
        <hr>
        <br>
        <form method="POST" action="ChangePasswordStudent.php" style="border:1px solid #ccc" enctype="multipart/form-data">
            <table >
                <tr>
                    <td><b>Current Password</b></td>&nbsp;&nbsp;&nbsp;&nbsp;
                    <td><input type="password" name="txtcurrentpassword" placeholder="Enter Your Current Password" required></td>
                </tr>
                <tr>
                    <td><b>New Password</b></td>&nbsp;&nbsp;&nbsp;&nbsp;
                    <td><input type="password" name="txtnewpassword" placeholder="Enter Your New Password" required></td>
                </tr>
                <tr>
                    <td><b>Confirm Password</b></td>&nbsp;&nbsp;&nbsp;&nbsp;
                    <td><input type="password" name="txtconfirmpassword" placeholder="Enter Your New Password" required></td>
                </tr>
                <tr>
                    
                    <td><input type="reset" value="RESET" name="txtbtnchange" class="button"></td>
                    <td><input type="submit" value="CHANGE" name="txtbtnchange" class="button"></td>
                </tr>
            </table>
        </form>
        </center>
    </body>
</html>

