<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <?php
        
       include './company_header.php';
        ?>
        <title>Skill Requirement</title>
                <style>
body {font-family: Arial;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password]
{
    width: 20%;
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

.textarea
{
    background-color: #ddd;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

}
</style>

       </head>
    <body>
         <?php
        
        include './header_link.php';
        ?>
            <form method="POST" action="skillreq.php">
           <center>
               <label><b>POSTING ID<b></label>
               <input type="text" name="txtid" value="<?php if(isset($_REQUEST["param_postingid"]))echo $_REQUEST["param_postingid"]; ?> " readonly="true">
                 
                    <br><br>
                
                    <label><b>Skill Needed<b></label> 
              <textarea rows="5" cols="30" name="txtaddress" placeholder="Enter The Skills Required For The Vacent Post"  required class="textarea"></textarea>
            
                    <br>
                    <br>
                    <input type="submit" value="Submit" class="button">
                    <input type="reset" value="Reset" class="button">
           </center>
           </form>     
    </body>
</html>
