 <html lang="en">
<head>
	<title>Table V03</title>
        
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
<style>
.tab {
  width: 40%;
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
    <font size="6">
 <center>
       
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>

<?php
session_start();

$arr_company=array();
$arr_skillreq=array();
$companycode=$_REQUEST["param_companycode"];
$username=null;
$passwd=null;

$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);

$stmt1=$conn->prepare("select * from company where companycode =? ");
$stmt1->bindParam(1,$companycode);
$stmt1->execute();
while($row1=$stmt1->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_company,$row1);
}
$rows1=count($arr_company);
echo "<table class=tab>";
echo "<tr class=row101 head>";
echo "<th class=column101 column1 data-column=column1>Company Name</th>";
echo "<th class=column101 column2 data-column=column2>HR</th>";
echo "<th class=column101 column3 data-column=column3>Phone</th>";
echo "</tr >";
for($i=0;$i<$rows1;$i++)
{
    $companycode=$arr_company[$i]["companycode"];
    
    echo "<tr class=row101>";
    echo "<td class=column101 column1 data-column=column1>".$arr_company[$i]["companyname"]."</td>";
    echo "<td class=column101 column2 data-column=column2>".$arr_company[$i]["hr"]."</td>";
    echo "<td class=column101 column3 data-column=column3>".$arr_company[$i]["phone"]."</td>";
    echo "</tr>";
}
echo "</table>";
echo"<br>";
echo"<br>";
echo"<hr>";


$stmt2=$conn->prepare("select * from skillreq where postingid=(select postingid from campusdrive where companycode=?)");
$stmt2->bindParam(1,$companycode);
$stmt2->execute();
while($row2=$stmt2->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_skillreq,$row2);
}
$row2=count($arr_skillreq);
if($row2==0)
{
       echo "<br>";echo "<br>";
       echo "<center>";echo "Skills Are Not Required";echo "</center>";
}
 else {
    
echo "<table class=tab1>";
echo "<tr class=row101 head>";
echo "<th><center>Skills Needed</center></th>";
echo "</tr>";
for($i=0;$i<$row2;$i++)
{
    echo "<tr>";
    echo "<td class=column101 column1 data-column=column1>".$arr_skillreq[$i]["skillneeded"]."</td>";
    echo "</tr>";
}
echo "</table>";
 }
?>
 </center>
</font>
 </body>
</html>




