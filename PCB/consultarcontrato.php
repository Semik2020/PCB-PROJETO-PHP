<?php
//iniciando a conexão com o banco de dados 
$cx = mysqli_connect("127.0.0.1", "programadorpc", "123456", "db_pc");
 
//selecionando o banco de dados 

 
//criando a query de consulta à tabela criada 
$sql = mysqli_query($cx, "SELECT * FROM tbl_Contrato") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);
 
//pecorrendo os registros da consulta. 
while($aux = mysqli_fetch_assoc($sql)) { 
  echo "-----------------------------------------<br />"; 
 
  echo "Nome Projeto:".$aux["nm_Projeto"]."<br />";
  echo "Descrição:".$aux["desc_Projeto"]."<br />";
  echo "Nome Contato:".$aux["nm_Contato"]."<br />"; 
  echo "Email:".$aux["ds_Email"]."<br />";
  echo "Telefone:".$aux["no_Telefone"]."<br />";
  echo "Duração:".$aux["tempo_Execucao"]."<br />"; 
}
 
?>