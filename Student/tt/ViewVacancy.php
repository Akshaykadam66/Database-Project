<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



    <html lang="en">
<head>
	<title>View Vacancy</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images1/icons/favicon.ico"/>
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

<body>
    <?php
    session_start();
    ?>
     
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							
 
 <?php

$arr_vacancy=array();
$username=null;
$passwd=null;
$jobtype=$_SESSION["course"];
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select * from campusdrive where jobtype=?");
$stmt->bindParam(1,$jobtype);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_vacancy,$row);
}
$conn=null;
$rows=count($arr_vacancy);
echo "<br>";echo "<br>";echo "<br>";
echo "<table >";
echo "<tr class=row100 head> ";
echo "<th class=column100 column1 data-column=column1>Designation</th>";
echo "<th class=column100 column2 datcolumn=column2>Salary</th>";
echo "<th class=column100 column2 datcolumn=column2>SSLC Minimum Percentage</th>";
echo "<th class=column100 column3 datcolumn=column3>Degree Minimum Percentage</th>";
echo "<th class=column100 column4 datcolumn=column4>Backlogs Allowed</th>";
echo "<th class=column100 column5 datcolumn=column5>Requirement</th>";
echo "<th class=column100 column6 datcolumn=column6>Interview Date</th>";
echo "<th class=column100 column7 datcolumn=column7>Company Details</th>";
echo "<th class=column100 column8 datcolumn=column8>Apply</th>";
echo "</tr>";
for($i=0;$i<$rows;$i++)
{
     $companycode=$arr_vacancy[$i]["companycode"];
    $pid=$arr_vacancy[$i]["postingid"];
    
    echo "<tr class=row100>";
    echo "<td class=column100 column1 data-column=column1>".$arr_vacancy[$i]["post"]."</td>";
    echo "<td class=column100 column1 data-column=column1>".$arr_vacancy[$i]["salarypackage"]."</td>";
    echo "<td class=column100 column1 data-column=column1>".$arr_vacancy[$i]["sslcminpercentage"]."</td>";
    echo "<td class=column100 column1 data-column=column1>".$arr_vacancy[$i]["dipminpercentage"]."</td>";
    echo "<td class=column100 column1 data-column=column1>".$arr_vacancy[$i]["backlogsallowed"]."</td>";
    echo "<td class=column100 column1 data-column=column1>".$arr_vacancy[$i]["requirement"]."</td>";
    echo "<td class=column100 column1 data-column=column1>".$arr_vacancy[$i]["interviewdate"]."</td>";
    echo "<td class=column100 column1 data-column=column1>";
    echo "<a href=ViewCompanyDetails.php?param_companycode=$companycode>View Profile</a>";
    echo "</td>";
      echo "<td class=column100 column1 data-column=column1>";
    echo "<a href=ApplyJob.php?param_pid=$pid>Apply</a>";
    echo "</td>";
     
    echo "</tr>";
}
echo "</table>";
?>


       
    </body>
</html>
