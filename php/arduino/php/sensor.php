<?php 
session_start();

//$estado = $_POST['estado'];
//$nome = $_POST['nome'];
//$hora = $_POST['hora'];

$con = mysqli_connect("localhost", "id7918765_nicoadmin", "nicoadmin", "SENSOR");
$select = mysqli_select_db($con, "id7918765_server2") or die("Sem acesso ao DB");

$rowcount = '';
$result = '';
 
$sql = "SELECT * FROM `SENSOR`";

if ($result=mysqli_query($con,$sql)) {
    $rowcount = mysqli_num_rows($result);
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="">
<head>
    
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
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENSOR STATUS</title>
    <link rel="stylesheet" type="text/css" href="/css/table.css">
</head>

<body>
    
    <h1>Sensores</h1>
	<table class="data-table">
        <caption class="title">Tabela que mostra quando o sensor esteve ligado </caption>
		<thead>
			<tr>
				<th>NOME</th>
				<th>ESTADO</th>
				<th>HORA</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr>
                        <td>'.$no.'</td>
                        <td>'.$row['NOME'].'</td>
                        <td>'.$row['ESTADO'].'</td>
                        <td>'.$row['HORA'].'</td>
                    </tr>';
                $no++;
            }
        }?>
		</tbody>
	</table>
<script src="/js/table.js"></script>    
</body>
</html>


