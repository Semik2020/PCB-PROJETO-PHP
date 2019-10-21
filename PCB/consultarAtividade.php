

<?php
//iniciando a conexão com o banco de dados 
$cx = mysqli_connect("127.0.0.1", "programadorpc", "123456", "db_pc");
 
//selecionando o banco de dados 

 
//criando a query de consulta à tabela criada 
$sql = mysqli_query($cx, "SELECT * FROM tbl_Atividade") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);
 
//pecorrendo os registros da consulta. 
while($aux = mysqli_fetch_assoc($sql)) { 
  echo "-----------------------------------------<br />"; 
  
  echo "Atividade: ".$aux["desc_Atividade"]."<br />";
  echo "Responsável: ".$aux["resp_Atividade"]."<br />";
  echo "Data Inicial: ".$aux["data_inicio"]."<br />"; 
  echo "Data Final: ".$aux["data_final"]."<br />"; 
}
 
?>

