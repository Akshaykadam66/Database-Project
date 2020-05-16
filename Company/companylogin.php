<?php
session_start();

$loginid=$_POST["txtloginid"];
$password=$_POST["txtpassword"];
$username=null;
$passwd=null;
$array_login=array();
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select companycode from company where loginid=? and password=? and approvalstatus<>'NA'");
$stmt->bindParam(1,$loginid);
$stmt->bindParam(2,$password);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($array_login,$row);
}
$c=count($array_login);
$conn=null;

if($c==0)
{
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";
    echo "<center>";
     echo "<h1>";echo "UnSuccessfull Login...!!!";echo "</h1>";
     echo "</center>";
}
 else 
{
      $_SESSION["loginid"]=$loginid;
      $_SESSION["password"]=$password;
      $_SESSION["companycode"]=$array_login[0]["companycode"];
     
      
      
      header("Location:companyhome.php");
}

?>

