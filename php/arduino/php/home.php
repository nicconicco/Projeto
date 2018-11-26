<?php 
ob_start();
session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) {
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:../index.html');
}
 
$logado = $_SESSION['login'];
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA WEB</title>
    
    <link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
    
    <style type="text/css">
    
        h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}
        
       .btn {
            border-bottom: 1px solid #ebebeb;
            border-left: 1px solid #ebebeb;
            border-right: 1px solid #ebebeb;
            border-top: 1px solid #ebebeb;
            color: #e6f5ff;
            font-size: 26px;
            width: 150px;
            height: 50px;
            margin: 10px;
		    background-color: #538bb9;
			text-align: center;
        }
    </style>
</head>
 
<body>
    <h1>Menu principal</h1>
    <br>
    <h1>Bem vindo, <?php echo $_SESSION['login']?></h1>
    <br>
    <input type="button" value="Sensor" class="btn" id="btnHome" 
           onClick="document.location.href='/php/sensor.php'" />
    <input type="button" value="Sensor" class="btn" id="btnHome" 
           onClick="document.location.href='/php/sensor.php'" />
    <input type="button" value="Sensor" class="btn" id="btnHome" 
           onClick="document.location.href='/php/sensor.php'" />
    <input type="button" value="Sensor" class="btn" id="btnHome" 
           onClick="document.location.href='/php/sensor.php'" />
</body>
</html>

<?php
ob_end_flush();
?>