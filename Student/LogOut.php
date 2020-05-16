<html>
    <body>

<?php
    
    session_start();
	session_destroy();
	unset($_SESSION['name']);
        unset($_SESSION['phone']);
	header("Location:StudentWelcome.php");
?>
 </body>
</html>