<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
        
        include './header_link.php';
        ?>
        <title>Company Welcome</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
body {font-family: Arial;}
* {box-sizing: border-box}

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
    width:450px;
}

.button:hover {
color: cyan;
background: #000;
border: 1px solid #fff;
}
</style>
    </head>
    <body>
        <?php
        
       include './header.php';
        ?>
       
       
    
        <br><br>
        
    <center>
        <a href="companyregform.php"><button style="width:250px;" class="button">Register </button></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="companylog.php"><button style="width:250px;" class="button">Login </button></a>
     </center>
        <br>
        <br><br><br><br>
        <?php
    include './company_footer.php';
   ?> 
        </body>
</html>
