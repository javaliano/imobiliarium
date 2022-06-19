<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style-cadastrar.css">
   
</head>
<body>
<form action="cadastrar.inc.php" method="POST"> 
<fieldset>
<legend> Cadastro de Clientes </legend><br>
<label>Nome:</label>
<input type="text" name="form-nomecliente"  id="id-nomecliente" placeholder="nome"><br>
<label>Sobrenome:</label><br>
<input type="text" name="form-sobrenomecliente"  id="id-sobrenomecliente" placeholder="sobrenome"><br>
<label>CPF/CNPJ:</label><br>
<input type="text" name="form-cpfcliente" id="id-cpfcliente" size="11"><br>
<label>e-mail:</label>
<input type="email" name="form-emailcliente" id="id-emalcliente"><br>
<label>Senha:</label><br>
<input type="password" name="form-senhacliente" id="id-senhacliente"><br>

<label>Celular:</label><br>
<input type="text" name="form-celular" id="id-celular size="15"><br>
<label>Tipo:</label><br>
<select name="select-tipoend">
    <option value="Rua">Rua</option>
	<option value="Avenida">Avenida</option>
	<option value="Rodovia">Rodovia</option>
    <option value="Servidão">Rua</option>
	<option value="Travessa">Avenida</option>
</select>
<input type="text" name="form-logradouro" id="id-logradouro"><br>
<label>Complemento/Número</label><br>
<input type="text" name="form-numeroend" id="id-numeroend"><br>
<label>Complemento/Número</label><br>
<input type="text" name="form-complemento" id="id-complemento"><br>
<label>Bairro:</label><br>
<input type="text" name="form-bairro" id="id-cidade"><br>
<label>Cidadel<br>
<input type="text" name="form-cidadeform-cidade" id="id-cidade"><br>
<label>CEP<br>
<input type="text" name="form-cep" id="id-cep"><br>
<label>Estado:<br>
<select name="estbra">
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espírito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MT">Mato Grosso</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
</select>

<label></label><br>
<label></label><br>
<label></label><br>
<label></label><br>
<label></label><br>
<label></label><br>

<!--
<label>CPF/CNPJ:</label>
<input type="text" name="cpf" id="icpf" size="11"><br>
<label>Nome da Loja:</label> &nbsp;
<input type="text" name="nmcl" id="inmcl" size="60" required="required" placeholder="Digite o nome da Loja..."> 
<label>Escolha o tipo de cliente:</label><br>
<input type="radio" name="tpcl" id="itpcl1" required="required" value="0">Pet Shop<br>
<input type="radio" name="tpcl" id="itpcl2" required="required" value="1">Agropecuária<br><br> 
<label>Nome do responsável:</label><br>
<input type="text" name="nmresp" id="iresp" required="required" size="60"><br>
<label>Telefone:</label><br>
<input type="text" name="fone" id="ifone" size="20"><br>
<label>Email:</label><br>
<input type="email" name="cmail" id="icmail" size="30"><br>
<label>Instagram:</label><br>
<input type="text" name="insta" id="iinsta" size="20"><br>
<label>Whatsapp:</label><br>
<input type="text" name="zap" id="izap" size="15"><br>
<label>Endereço:</label><br>
<input type="text" name="end" id="iend" size="60"><br>
<label>Complemento/Número</label><br>
<input type="text" name="comp" id="icomp" size="15"><br>
<label>Bairro:</label><br>
<input type="text" name="bairro" id="ibairro" size="40"><br>
<label>Cidade/label<br>
<input type="text" name="city" id="icity" size="40"><br>
<label>Estado:<br>
<select name="estbra">
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espírito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MT">Mato Grosso</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
</select>
-->


</fieldset>
<button type="submit" name="cadastro">Enviar</button>
</form>

</body>
</html>