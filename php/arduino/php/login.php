<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.

$con = mysqli_connect("localhost", "id7918765_nicoadmin", "nicoadmin", "USUARIO");
$select = mysqli_select_db($con, "id7918765_server2") or die("Sem acesso ao DB");
 
// A variavel $result pega as varias $login e $senha, faz uma 
//pesquisa na tabela de usuarios
$sql = "SELECT * FROM `USUARIO` 
WHERE `NOME` = '$login' AND `SENHA`= '$senha'";

if ($result=mysqli_query($con,$sql)) {
    
    $rowcount = mysqli_num_rows($result);
    
    if($rowcount > 0 ) {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('location:/php/home.php');
    } else {
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        header('location:../index.html');  
    }
    
    mysqli_free_result($result);
}

mysqli_close($con);
?>