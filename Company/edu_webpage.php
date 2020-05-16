<html>
    <body>

<?php
session_start();
?>
<html>
    <head>
        <title>Qualification Details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         <?php
            $regno=$_REQUEST["param_pregno"];
            $_SESSION["sess_regno"]=$regno;
          ?>
        <form method="POST" action="edu.php" >
           
            <label> Register Number</labael>
             <input type="text" name="txtreg" value="<?php echo $regno;?>" readonly="true" >
             <br>
             <label>Qualification</label>
                  <select name="Qualification">
                       <option value="SSLC">SSLC</option>
                       <option value="PUC">PUC</option>
                       <option value="Diploma">Diploma</option>
                       <option value="BE/B.Tech">BE/B.Tech</option>
                       <option value="ME/M.Tech">ME/M.Tech</option>
                      <option value="BA">BA</option>
                      <option value="MA">MA</option>
                      <option value="B.com">B.com</option>
                      <option value="M.com">M.com</option>
                      <option value="BCA">BCA</option>
                      <option value="MCA">MCA</option>
                      <option value="BBA">BBA</option>
                      <option value="MBA">MBA</option>
                      <option value="B.sc">B.sc</option>
                      <option value="M.sc">M.sc</option>
                      <option value="MBBS">MBBS</option>
                      <option value="BAMS">BAMS</option>
                      <option value="B.HM">B.HM</option>
                     </select>
             <br>
             <label>Percentage</label>
               <input type="text" name="txtpercentage" required>
               <br>
               <input type="submit" name="btnReg" value="REGISTER">
               <input type="submit" name="btnaddskills" value="AddSkills"></a>
      </form>
   </body>
</html>
