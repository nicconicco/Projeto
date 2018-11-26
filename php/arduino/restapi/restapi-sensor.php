<?php

session_start();

$conn = mysqli_connect("localhost", "id7918765_nicoadmin", "nicoadmin", "SENSOR");
$select = mysqli_select_db($conn, "id7918765_server2") or die("Sem acesso ao DB");

$rowcount = '';
$result = '';

if ($_SERVER['REQUEST_METHOD'] == "GET") {
       $estado = $_GET['estado'];
        $nome = $_GET['nome'];
        $hora = $_GET['hora'];
    
        $sql = "INSERT INTO `SENSOR` (`ESTADO`, `NOME`, `HORA`) VALUES ('$estado', '$nome', '$hora');";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
} else if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $estado = $_POST['estado'];
        $nome = $_POST['nome'];
        $hora = $_POST['hora'];
    
        $sql = "INSERT INTO `SENSOR` (`ESTADO`, `NOME`, `HORA`) VALUES ('$estado', '$nome', '$hora');";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
} else {
        http_response_code(405);
}

mysqli_close($conn);
?>