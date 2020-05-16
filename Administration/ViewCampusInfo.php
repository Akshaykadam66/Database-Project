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
		
                   <div class="table100 ver5 m-b-110">
					<table data-vertable="ver5">
						<thead>
				
<?php
session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$arr_campusdrive=array();
$arr_skillreq=array();
$companycode=$_REQUEST["param_companycode"];
$username=null;
$passwd=null;

$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);

$stmt1=$conn->prepare("select * from campusdrive where companycode =? ");
$stmt1->bindParam(1,$companycode);
$stmt1->execute();
while($row1=$stmt1->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_campusdrive,$row1);
}
$rows1=count($arr_campusdrive);
echo "<table>";
echo "<tr class=row100 head>";
echo "<th class=column100 column1 data-column=column1>Posting ID</th>";
echo "<th class=column100 column2 data-column=column2>Created Date</th>";
echo "<th class=column100 column3 data-column=column3>Company Code</th>";
echo "<th class=column100 column4 data-column=column4>Post</th>";
echo "<th class=column100 column5 data-column=column5>Salary Package</th>";
echo "<th class=column100 column6 data-column=column6>SSLC Minimum Percentage</th>";
echo "<th class=column100 column7 data-column=column7>Degree Minimum Percentage</th>";
echo "<th class=column100 column8 data-column=column8>Backlogs Allowed</th>";
echo "<th class=column100 column9 data-column=column9>Requirement</th>";
echo "<th class=column100 column10 data-column=column10>Inteview Date</th>";
echo "<th class=column100 column11 data-column=column11>Job Type</th>";
echo "</tr>";
for($i=0;$i<$rows1;$i++)
{
    $companycode=$arr_campusdrive[$i]["companycode"];
    
    echo "<tr class=row100>";
    echo "<td class=column100 column1 data-column=column1>".$arr_campusdrive[$i]["postingid"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$arr_campusdrive[$i]["createddate"]."</td>";
    echo "<td class=column100 column3 data-column=column3>".$arr_campusdrive[$i]["companycode"]."</td>";
    echo "<td class=column100 column4 data-column=column4>".$arr_campusdrive[$i]["post"]."</td>";
    echo "<td class=column100 column5 data-column=column5>".$arr_campusdrive[$i]["salarypackage"]."</td>";
    echo "<td class=column100 column6 data-column=column6>".$arr_campusdrive[$i]["sslcminpercentage"]."</td>";
    echo "<td class=column100 column7 data-column=column7>".$arr_campusdrive[$i]["dipminpercentage"]."</td>";
    echo "<td class=column100 column8 data-column=column8>".$arr_campusdrive[$i]["backlogsallowed"]."</td>";
    echo "<td class=column100 column9 data-column=column9>".$arr_campusdrive[$i]["requirement"]."</td>";
    echo "<td class=column100 column10 data-column=column10>".$arr_campusdrive[$i]["interviewdate"]."</td>";
    echo "<td class=column100 column11 data-column=column11>".$arr_campusdrive[$i]["jobtype"]."</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>



