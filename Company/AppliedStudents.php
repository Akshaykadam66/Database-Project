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
<style>
.tab {
  width: 80%;
  font-size:100px;
  background-color: #fff;
}
.tab1 {
  width: 20%;
  font-size:100px;
  background-color: #fff;
}

</style>

</head>
<body>
<center>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
                                    <div class="table100 ver3 m-b-110">
					<table data-vertable="ver3">
						<thead>
				
<?php
    session_start();    
        include './header_link.php';
       include './company_header.php';
      
$companycode=$_SESSION["companycode"];
$arr_application=array();
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select * from application where postingid in (select postingid from campusdrive where companycode=?)");
$stmt->bindParam(1, $companycode);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_application,$row);
}
$conn=null;
$row=count($arr_application);
echo "<table class=tab>";
echo "<tr class=row100 head>";
echo "<th class=column100 column1 data-column=column1>Application ID </th>";
echo "<th class=column100 column2 data-column=column2>Applied Date</th>";
echo "<th class=column100 column3 data-column=column3>Registration Number</th>";
echo "<th class=column100 column4 data-column=column4>Posting ID</th>";
echo "<th class=column100 column4 data-column=column4>Profile</th>";
echo "</tr>";
for($i=0;$i<$row;$i++)
{
     $regno=$arr_application[$i]["regno"];
    echo "<tr class=row100>";
    echo "<td class=column100 column1 data-column=column1>".$arr_application[$i]["applicationid"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$arr_application[$i]["applieddate"]."</td>";
    echo "<td class=column100 column3 data-column=column3>".$regno."</td>";
    echo "<td class=column100 column4 data-column=column4>".$arr_application[$i]["postingid"]."</td>";
    echo "<td class=column100 column3 data-column=column3><a href=ViewStudentDetails.php?param_regno=$regno>View Student Details</a></td>";

    echo "</tr>";
}
echo "</table>";

?>
</center>
 </body>
 </html>



