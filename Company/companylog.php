<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<html>
    <head>
        <title>Company Login</title>
        <?php
        include './login_link.php';
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <a href=" companylogin.php"></a>
    <body>
         <?php
        include './login_header.php';
        ?>
        <div class="box-header">
				<h2>Log In</h2>
			</div>
        <form method="POST" action="companylogin.php">
            <label for="username"> Login ID</label>
            <br/>
            <input type="text" name="txtloginid" id="username" required>
            <br/>
                 
            <label for="password">   Password</label>
            <br/>
             <input type="text" name="txtpassword" id="password" required>
             <br/>
                    
                  
                      
              <input type="submit" value="SUBMIT">
              <br/>
              <input type="reset" value="RESET">
                 
        </form> 
        
         <?php
        include './login_footer.php';
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



