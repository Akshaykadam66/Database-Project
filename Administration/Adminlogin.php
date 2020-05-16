<?php
session_start();

$uname=$_POST["u"]; 
$pass=$_POST["p"];
$username=null;
$passwd=null;
$array_student=array();
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select * from placementcell where loginid=? and password=?");
$stmt->bindParam(1, $uname);
$stmt->bindParam(2, $pass);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($array_student, $row);
}
$c=count($array_student);
$conn=null;
$msg="";
if($c==0)
{
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";
    echo "<center>";
     echo "<h1>";echo "UnSuccessfull Login...!!!";echo "</h1>";
     echo "</center>";
}
else
{
    $_SESSION["uname"]=$uname;
    $_SESSION["pass"]=$pass;
    //echo "valid";
   header("Location:Adminhome.php");
            
}
$conn=null;

?>
