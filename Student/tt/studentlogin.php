<html>
    <body>

<?php
session_start();

$emailid=$_POST["e"]; 
$password=$_POST["p"];
$username=null;
$passwd=null;
$array_student=array();
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select * from student where emailid=? and password=? and regapproval<>'NA'");
$stmt->bindParam(1, $emailid);
$stmt->bindParam(2, $password);
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
    $_SESSION["emailid"]=$emailid;
    $_SESSION["password"]=$password;
    $_SESSION["course"]=$array_student[0]["course"];
    $_SESSION["regno"]=$array_student[0]["regno"];
    header("Location:dashboardstud.php");
            
}
$conn=null;

?>
</body>
</html>
