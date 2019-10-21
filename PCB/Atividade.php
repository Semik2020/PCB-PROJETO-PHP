<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="estilos.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Area Restrita Project Centre</title>
</head>
<body>
    <form method="POST" action="processaAtividade.php">
    	<div>Qual a atividade a ser cadastrada?</div><br/>
    	<input type="text" name="txtAtividade">

    	<div >Responsável pela atividade</div><br/>
    	<select id=cbPais name="txtResp" style="width:100%;border: 2px solid #aaa;border-radius: 4px; margin: 8px 0; padding: 8px;">
        	<option>Michael Silva</option>
   			<option>Leonnardo Rennan</option>
   			<option>Marcos Matioli</option>
    		<option>Carlos Cavalca</option>
    		<option>Richard Alencar</option>
    		<option>Nathan Esteves</option>
		</select><br/><br/>

		<label>Início</label>
    	<input type="date" name="txtInicio">

    	<label>Fim</label>
    	<input type="date" name="txtFinal">
       
       
    	


    	<input type="submit" name="" value="ENVIAR">

    </form>
</body>
</html>