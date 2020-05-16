<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<html>
    <head>
        <title>Student Login</title>
        <?php
        include './login_link.php';
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    
    <body>
         <?php
        include './login_header_1.php';
        ?>
        <div class="box-header">
				<h2>Log In</h2>
			</div>
        <form method="POST" action="studentlogin.php">
            <label for="username"> Email ID</label>
            <br/>
            <input type="text" name="e" id="username" required>
            <br/>
                 
            <label for="password">   Password</label>
            <br/>
            <input type="password" name="p" id="password" required>
             <br/>
                    
                  
                      
              <input type="submit" value="SUBMIT">
              <br/>
              <input type="reset" value="RESET">
                 
        </form> 
        
         <?php
        include './login_footer_1.php';
        ?>
    </body>
    
    
<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>
</html>



