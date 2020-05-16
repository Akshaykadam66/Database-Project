<html lang="en">
<head>
	<title>Student Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
.tab {
  width: 50%;
 
}
</style>

</head>
<body>
<center>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
                           <div class="table100 ver4 m-b-110">
					<table data-vertable="ver4">
						<thead>
				

<?php
session_start();
        //include './header_link.php';
       //include './company_header.php';
       
$regno=$_REQUEST["param_regno"];
$arr_student=array();
$arr_educationprofile=array();
$arr_studentskills=array();
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt1=$conn->prepare("select * from student where regno in (select regno from student where regno=?)");
$stmt1->bindParam(1, $regno);
$stmt1->execute();
while($row1=$stmt1->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_student,$row1);
}
$row1=count($arr_student);

echo "<table>";
echo "<tr class=row100 head>";
echo "<th class=column100 column1 data-column=column1>Reg No</th>";
echo "<th class=column100 column2data-column=column2>First Name</th>";
echo "<th class=column100 column3 data-column=column3>Middle Name</th>";
echo "<th class=column100 column4 data-column=column4>Last Name</th>";
echo "<th class=column100 column5 data-column=column5>E-mail ID</th>";
echo "<th class=column100 column6 data-column=column6>Password</th>";
echo "<th class=column100 column7 data-column=column7>Gender</th>";
echo "<th class=column100 column8 data-column=column8Contact</th>";
echo "<th class=column100 column9 data-column=column9>Completion Year</th>";
echo "<th class=column100 column10 data-column=column10>Backlogs</th>";
echo "<th class=column100 column11 data-column=column11>Address</th>";
echo "<th class=column100 column12 data-column=column12>DOB</th>";
echo "<th class=column100 column13 data-column=column13>University</th>";
echo "<th class=column100 column14 data-column=column14>Aggregate</th>";
echo "<th class=column100 column15 data-column=column15>Course</th>";
echo "<th class=column100 column16 data-column=column16>Select</th>";
echo "<th class=column100 column17 data-column=column17>PHoto</th>";
echo "</tr>";

for($i=0;$i<$row1;$i++)
{
    $regno=$arr_student[$i]["regno"];
    $photo="../Student/".$arr_student[$i]["photo"];
    echo "<tr class=row100>";
    echo "<td class=column100 column1 data-column=column1>".$arr_student[$i]["regno"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$arr_student[$i]["fname"]."</td>";
    echo "<td class=column100 column3 data-column=column3>".$arr_student[$i]["mname"]."</td>";
    echo "<td class=column100 column4 data-column=column4>".$arr_student[$i]["lname"]."</td>";
    echo "<td class=column100 column5 data-column=column5>".$arr_student[$i]["emailid"]."</td>";
    echo "<td class=column100 column6 data-column=column6>".$arr_student[$i]["password"]."</td>";
    echo "<td class=column100 column7 data-column=column7>".$arr_student[$i]["gender"]."</td>";
    echo "<td class=column100 column8 data-column=column8>".$arr_student[$i]["phone"]."</td>";
    echo "<td class=column100 column9 data-column=column9>".$arr_student[$i]["completionin"]."</td>";
    echo "<td class=column100 column10 data-column=column10>".$arr_student[$i]["backlogs"]."</td>";
    echo "<td class=column100 column11 data-column=column11>".$arr_student[$i]["address"]."</td>";
    echo "<td class=column100 column12 data-column=column12>".$arr_student[$i]["dob"]."</td>";
    echo "<td class=column100 column13 data-column=column13>".$arr_student[$i]["university"]."</td>";
    echo "<td class=column100 column14 data-column=column14>".$arr_student[$i]["aggregate"]."</td>";
    echo "<td class=column100 column15 data-column=column15>".$arr_student[$i]["course"]."</td>";
    
    echo "<td>";
    echo "<a href=HireStudent.php?param_regno=$regno>Hire</a>";
        echo "</td>";
   echo "<td><img height=200 width=200 src=".$photo." /></td>";  
  // echo "$photo";
    echo "</tr>";
}
 echo"</table>";

$stmt2=$conn->prepare("select * from educationprofile where regno in (select regno from educationprofile where regno=?)");
$stmt2->bindParam(1, $regno);
$stmt2->execute();
while($row2=$stmt2->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_educationprofile,$row2);
}
$row2=count($arr_educationprofile);

echo"<hr>";

echo "<table class=tab >";
echo "<tr class=row100 head>";
echo "<th class=column100 column1 data-column=column1>Qualification</th>";
echo "<th class=column100 column2 data-column=column2>Percentage</th>";
echo "</tr>";

for($i=0;$i<$row2;$i++)
{
      
    echo "<tr class=row100>";
    echo "<td class=column100 column1 data-column=column1>".$arr_educationprofile[$i]["qualification"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$arr_educationprofile[$i]["percentage"]."</td>";
    echo "</tr>";
}
echo "</table>";




$stmt3=$conn->prepare("select * from studentskills where regno in (select regno from studentskills where regno=?)");
$stmt3->bindParam(1, $regno);
$stmt3->execute();
while($row3=$stmt3->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_studentskills,$row3);
}
$row3=count($arr_studentskills);
if($row3==0)
{
    echo "<br>";echo "<br>";
       echo "<h3>";echo "<center>";echo "Skills  Not Found";echo "</center>";echo "</h3>";

}
 else
 {
    
     echo "<hr>";

echo "<table class=tab>";
echo "<tr>";
echo "<th>Skills</th>";
echo "</tr>";
for($i=0;$i<$row3;$i++)
{
    
    echo "<tr>";
    echo "<td>".$arr_studentskills[$i]["additionalskills"]."</td>";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";

 }
 
 
?>



