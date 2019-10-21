<?php
include "conexao.php"; // incluindo arquivo de conexao.php

$Contato = $_POST['txtContato'];
$Telefone = $_POST['txtTelefone'];
$Email = $_POST['txtEmail'];

$nomeLogradouro = $_POST['txtLogradouro'];
$numLogradouro = $_POST['TxtNumeroLogradouro'];
$compLogradouro = $_POST['txtComplemento'];
$Bairro = $_POST['txtBairro'];
$CEP = $_POST['txtCep'];
$Cidade = $_POST['txtCidade'];
$Estado = $_POST['txtEstado'];

$nomeProjeto = $_POST['txtNomeprojeto'];
$tpExecucao = $_POST['txtTempo'];
$descProjeto = $_POST['txtDescricao'];

// variável $sql recebe comando de inserção. 
// Insira na tabela consultor nos campos que estiverem entre parentes
// os valores que estiverem armazenados nas variaveis
$sql = "insert into tbl_Contrato(nm_Contato,no_Telefone,ds_Email,nm_Logradouro,no_Logradouro,cp_Logradouro,end_Bairro,end_CEP,end_Cidade,end_Estado,nm_Projeto,tempo_Execucao,desc_Projeto)
values('$Contato','$Telefone','$Email','$nomeLogradouro','$numLogradouro','$compLogradouro','$Bairro','$CEP','$Cidade','$Estado','$nomeProjeto','$tpExecucao','$descProjeto');";
$query = mysqli_query($conexao, $sql); // executando variavel $sql
$linhas = mysqli_affected_rows($conexao); // comando para ver o numero de linhas afetadas

if($linhas == 1){  // se o número de linnhas for  igual a 1 então...

      echo "dados cadastrados com sucesso !!"; //imprima este resultado na tela
}

else{ // caso contrário, escreva o texto que estiver entre aspas
	 echo "ocorreu um erro ao tentar inserir os dados !!";	
}
mysqli_close($conexao); // encerrando a conexão com banco de dados.
?>