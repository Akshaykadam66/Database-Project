
<!DOCTYPE html>
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
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
                                   <div class="table100 ver6 m-b-110">
					<table data-vertable="ver6">
						<thead>
				

<?php
session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$arr_educationprofile=array();
$arr_studentskills=array();
$regno=$_REQUEST["param_regno"];
$username=null;
$passwd=null;

$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);

$stmt1=$conn->prepare("select * from educationprofile where regno =? ");
$stmt1->bindParam(1,$regno);
$stmt1->execute();
while($row1=$stmt1->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_educationprofile,$row1);
}
$rows1=count($arr_educationprofile);
echo "<table >";
echo "<tr class=row100 head>";
echo "<th class=column100 column1 data-column=column1>Qualification</th>";
echo "<th class=column100 column2 data-column=column2>Percentage</th>";
echo "</tr>";
for($i=0;$i<$rows1;$i++)
{
    $regno=$arr_educationprofile[$i]["regno"];
    
    echo "<tr class=row100>";
    echo "<td class=column100 column1 data-column=column1>".$arr_educationprofile[$i]["qualification"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$arr_educationprofile[$i]["percentage"]."</td>";
    echo "</tr>";
}
echo "</table>";
echo"<br>";
echo"<br>";

echo"<hr>";


$stmt2=$conn->prepare("select * from studentskills  where regno=?");
$stmt2->bindParam(1,$regno);
$stmt2->execute();
while($row2=$stmt2->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_studentskills,$row2);
}
$row2=count($arr_studentskills);
if($row2==0)
{
       echo "<br>";echo "<br>";echo "<br>";echo "<br>";
       echo "No Skills Found";
}
 else {

    
          echo "<table border=1>";
          echo "<tr>";
          echo "<th>Student Skills</th>";
          echo "</tr>";
         for($i=0;$i<$row2;$i++)
         {
             echo "<tr>";
             echo "<td>".$arr_studentskills[$i]["additionalskills"]."</td>";
             echo "</tr>";
         }
          echo "</table>";
 }
?>

                                                    </body>
                                                    </html>



