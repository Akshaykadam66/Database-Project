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
<form method="POST" action="	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>


<?php
session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$arr_company=array();
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select * from company ");
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_company,$row);
}
$conn=null;
$rows=count($arr_company);
echo "<table border=1>";
echo "<tr row100 head>";
echo "<th class=column100 column1 data-column=column1>Company Code</th>";
echo "<th class=column100 column2 data-column=column2>Company Name</th>";
echo "<th  class=column100 column3 data-column=column3>HR</th>";
echo "<th class=column100 column4 data-column=column4>Phone</th>";
echo "<th class=column100 column5 data-column=column5>Approval Status</th>";
echo "<th class=column100 column6 data-column=column6>View Details</th>";



echo "</tr>";
for($i=0;$i<$rows;$i++)
{
    $companycode=$arr_company[$i]["companycode"];
    
       echo "<tr class=row100>";
    echo "<td class=column100 column1 data-column=column1>".$arr_company[$i]["companycode"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$arr_company[$i]["companyname"]."</td>";
    echo "<td class=column100 column3 data-column=column3>".$arr_company[$i]["hr"]."</td>";
    echo "<td class=column100 column4 data-column=column4>".$arr_company[$i]["phone"]."</td>";
    echo "<td class=column100 column5 data-column=column5>".$arr_company[$i]["approvalstatus"]."</td>";
    echo "<td class=column100 column6 data-column=column6>";
    echo "<a href=ViewCampusInfo.php?param_companycode=$companycode>Vacancy Details</a>";
    echo "</td>";
    echo "</tr>";

    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>


