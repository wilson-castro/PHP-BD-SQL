<?php

$nome = $_POST['nome'];
$dN = $_POST['d_n'];
$dI = $_POST['d_i'];
$idade = $_POST['idade'];
$Salario = round(floatval($_POST['sal']),2);
$ende = $_POST['end'];

require_once "connection.php";


 $sql = "INSERT INTO aluno(nome,dN,dI,idade,salario,endereco) VALUES('$nome','$dN','$dI',$idade,$Salario,'$ende')";

 mysqli_query($conn,$sql);

mysqli_close($conn);

?>