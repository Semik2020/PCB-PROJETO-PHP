<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="estilos.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="validar.js"></script>  
<meta charset="utf-8">

<title>Area Restrita Project Centre</title>
</head>
<body>

    <div>
        <h1>Cadastro de Contrato</h1>
        
            <form name="frmContrato" method="post" action="insContrato.php" onSubmit="return validar()">
            
                <input type="text" id="1" name="txtContato" placeholder="Contato"><br>
                <input type="text" id="2" name="txtTelefone" placeholder="Telefone"><br>
                <input type="text" id="3" name="txtEmail" placeholder="E-mail"><br><br>
                
                <input type="text" id="4" name="txtLogradouro" placeholder="Logradouro"><br>
                <input type="text" id="5" name="TxtNumeroLogradouro" placeholder="Número"><br>                
                <input type="text" name="txtComplemento" placeholder="Complemento"><br>                
                <input type="text" id="6" name="txtBairro" placeholder="Bairro"><br>                
                <input type="text" id="7" name="txtCep" placeholder="CEP"><br>
                <input type="text" id="8" name="txtCidade" placeholder="Cidade"><br>
                <input type="text" id="9" name="txtEstado" placeholder="Estado"><br><br>

                <input type="text" id="10" name="txtNomeprojeto" placeholder="Nome do Projeto"><br>
                <input type="text" id="11" name="txtTempo" placeholder="Tempo de execução"><br>
                <textarea placeholder="Descrição do Projeto" id="12" name="txtDescricao"></textarea><br><br>
                
                <input type="submit" value="Cadastrar" class="botVermelho"><br>
            </form>
        
    </div>


</body>
</html>

