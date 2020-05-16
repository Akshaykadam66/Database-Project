<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Dashboard</title>
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

        
        <?php
        
        include './header_link.php';
        ?>

    </head>
    <body><?php
        
        include './student_header.php';
        ?>

        
         <?php
        
        include './student_footer.php';
        ?>

    </body>
</html>
