<?php
$regno=$_POST["txtregno"];
$fname=$_POST["txtfname"];
$mname=$_POST["txtmname"];
$lname=$_POST["txtlname"];
$emailid=$_POST["txtemailid"];
$password=$_POST["txtpassword"];
$phone=$_POST["txtphone"];
$completionin=$_POST["txtcompletionin"];
$backlogs=$_POST["txtbacklogs"];
$dob=$_POST["txtdob"];
$gender=$_POST["gender"];
$address=$_POST["txtaddress"];
$university=$_POST["txtuniversity"];
$aggregate=$_POST["txtaggregate"];
$resumedoc=$_FILES["txtresumedoc"]["name"];
$tmp_dir=$_FILES["txtresumedoc"]["tmp_name"];
$course=$_POST["ct"];
if(empty($resumedoc))
{
    echo "Please select document File";
}
else
{
    $upload_docDir="StudResumes/";
    $resumedoc=$upload_docDir.$resumedoc;
    move_uploaded_file($tmp_dir, $resumedoc);
}
$photo=$_FILES["txtphoto"]["name"];
$tmp_dir1=$_FILES["txtphoto"]["tmp_name"];
if(empty($photo))
{
    echo "Please select photo File";
}
else
{
    $upload_docDir1="StudPhotos/";
    $photo=$upload_docDir1.$photo;
    move_uploaded_file($tmp_dir1, $photo);
}

$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("insert into student(regno,fname,mname,lname,emailid,password,gender,phone,completionin,backlogs,resumedoc,address,photo,dob,university,aggregate,course,regapproval,hiredstatus)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,'NA','NH')");
$stmt->bindParam(1,$regno);
$stmt->bindParam(2,$fname);
$stmt->bindParam(3,$mname);
$stmt->bindParam(4,$lname);
$stmt->bindParam(5,$emailid);
$stmt->bindParam(6,$password);
$stmt->bindParam(7,$gender);
$stmt->bindParam(8,$phone);
$stmt->bindParam(9,$completionin);
$stmt->bindParam(10,$backlogs);
$stmt->bindParam(11,$resumedoc);
$stmt->bindParam(12,$address);
$stmt->bindParam(13,$photo);
$stmt->bindParam(14,$dob);
$stmt->bindParam(15,$university);
$stmt->bindParam(16,$aggregate);
$stmt->bindParam(17,$course);





    if($stmt->execute())
 {
       echo "Inserted";  
    header("Location:edu_webpage.php?param_pregno=$regno");
 }
 else 
{
    echo "<center>";
     echo "<h2>";echo "Failed";echo "</h2>";
     echo "</center>";  
}
$conn=null;
?>
