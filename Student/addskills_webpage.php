<html>
    <body>

<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Skills</title>
    </head>
    <body>
         <?php
            $regno=$_SESSION["sess_regno"];
          ?>
        <form method="POST" action="addskills.php">
    <center>
        REGISTER NO:<input type="text" name="usrname" value="<?php echo $regno;?>" readonly="true" >
        <br><br>
        <br>
        <textarea rows="4" cols="50" name="txtskills" form="usrform" placeholder=" Enter Scholastic Skills" required></textarea>
        <br><br>
        <input type="submit" value="Register">
    </center>
    </form>
        </body>
</html>
