<?php

$username="admin";
$password="password";
$conn= mysqli_connect("127.0.0.1:3307", "root", "bala123", "fashion_loft");

// @mysqli_select_db("fashion_loft");
$result = mysqli_query($conn, "SELECT * FROM olist");
$row=mysqli_fetch_assoc($result);


?>
<html>
<head>
<style>
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
	</head>
<body background="bg.png">
<table class="data-table">
<center> <b><br><h1><font size="8">WELCOME</font></h1></br></b></center>
<center> <font size="6"><u>The ORDER Details</u></font><br> </br></center>
<br></br>
<tr>
<td> OID </td>
<td> Order recieved on </td>
<td> Quality test Check </td>
</tr>
<?php 
do
{
	echo "<tr>";
	echo "<td>".$row['Oid']."</td>";
	echo "<td>".$row['Rdate']."</td>";
	echo "<td>".$row['qtest']."</td>";
	echo "</tr>";
}while($row=mysqli_fetch_assoc($result));
?>