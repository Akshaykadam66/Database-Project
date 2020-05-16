


<html lang="en">
<head>
	<title>Table V03</title>
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
</head>
<style>
    
</style>
<body>
    <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
                            <div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$arr_student=array();
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select * from student where regapproval='NA'");
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_student,$row);
}
$conn=null;
$row=count($arr_student);
if($row==0)
{
    echo "<center>";echo"<br>";echo "<br>";
    echo"<br>";echo"<br>";echo"<br>";
    echo "<h2>All Students Are Approved</h2>";
    echo "</center>";
             
}    
else
{

echo "<table border=1>";
echo "<trclass=row100>";
echo "<th class=column100 column1 data-column=column1>Reg nO</th>";
echo "<th class=column100 column1 data-column=column2>First Name</th>";
echo "<th class=column100 column1 data-column=column3>Middle Name</th>";
echo "<th class=column100 column1 data-column=column4>Last Name</th>";
echo "<th class=column100 column1 data-column=column5>E-mail ID</th>";
echo "<th class=column100 column1 data-column=column6>Password</th>";
echo "<th class=column100 column1 data-column=column7>Gender</th>";
echo "<th class=column100 column1 data-column=column8>Contact</th>";
echo "<th class=column100 column1 data-column=colum9>Completion Year </th>";
echo "<th class=column100 column1 data-column=column10>Backlogs</th>";
echo "<th class=column100 column1 data-column=column11>Address</th>";
echo "<th class=column100 column1 data-column=column12>DOB</th>";
echo "<th class=column100 column1 data-column=column13>University</th>";
echo "<th class=column100 column1 data-column=column14>Aggregate</th>";
echo "<th class=column100 column1 data-column=column15>Course</th>";
echo "<th class=column100 column1 data-column=column16>Endorsement</th>";

echo "</tr>";
for($i=0;$i<$row;$i++)
{
    $regno=$arr_student[$i]["regno"];
    
    echo "<tr>";
    echo "<td class=column100 column1 data-column=column1>".$arr_student[$i]["regno"]."</td>";
    echo "<td class=column100 column1 data-column=column2>".$arr_student[$i]["fname"]."</td>";
    echo "<td class=column100 column1 data-column=column3>".$arr_student[$i]["mname"]."</td>";
    echo "<td class=column100 column1 data-column=column4>".$arr_student[$i]["lname"]."</td>";
    echo "<td class=column100 column1 data-column=column5>".$arr_student[$i]["emailid"]."</td>";
    echo "<td class=column100 column1 data-column=column6>".$arr_student[$i]["password"]."</td>";
    echo "<td class=column100 column1 data-column=column7>".$arr_student[$i]["gender"]."</td>";
    echo "<td class=column100 column1 data-column=column8>".$arr_student[$i]["phone"]."</td>";
    echo "<td class=column100 column1 data-column=column9>".$arr_student[$i]["completionin"]."</td>";
    echo "<td class=column100 column1 data-column=column10>".$arr_student[$i]["backlogs"]."</td>";
    echo "<td class=column100 column1 data-column=column11>".$arr_student[$i]["address"]."</td>";
    echo "<td  class=column100 column1 data-column=column12>".$arr_student[$i]["dob"]."</td>";
    echo "<td class=column100 column1 data-column=column13>".$arr_student[$i]["university"]."</td>";
    echo "<td class=column100 column1 data-column=column14>".$arr_student[$i]["aggregate"]."</td>";
    echo "<td class=column100 column1 data-column=column15>".$arr_student[$i]["course"]."</td>";
    echo "<td class=column100 column1 data-column=column16>";
    echo "<a href=ApproveStudents.php?param_regno=$regno>Approve</a>";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
}
?>


                                        </body>
                                        </html>


