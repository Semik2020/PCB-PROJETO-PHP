<?php

include "conexao.php";

$Atividade = $_POST['txtAtividade'];
$Responsavel = $_POST['txtResp'];
$DataInicio = $_POST['txtInicio'];
$DataFim = $_POST['txtFinal'];

$sql = "INSERT INTO tbl_Atividade VALUES";
$sql .= "(default, '$Atividade', '$Responsavel', '$DataInicio', '$DataFim')";

mysqli_query($conexao, $sql) or die ("Erro");
mysqli_close($conexao);
echo "Cadastrado com sucesso";


?>