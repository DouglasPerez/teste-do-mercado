<?php
$conecao = mysql_connect('127.0.0.1', 'root','') or die ("Não foi possivel conectar-se ao banco de dados");
mysql_select_db('mercadorias', $conecao) or die ("Banco de dados não encontrado");
?>
<!DOCTYPE html>
<!-- Comentários -->
<html>
  <head>
     <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     <title>Cadastro de Mercadorias</title>
     <link rel = "Stylesheet" type = "text/css" href = "CSS.css" />
	<script type="text/javascript">
function SomenteNumero(e){
 var tecla=(window.event)?event.keyCode:e.which;
 if((tecla>47 && tecla<58)) return true;
 else{
 if (tecla==8 || tecla==0 ) return true;
 else  return false;
 }
}
function validar() {
var cod = dados.codigo_mercadoria.value;
var tip = dados.tipo_mercadoria.value;
var nom = dados.nome_mercadoria.value;
var qtd = dados.qtd_mercadoria.value;
var preco = dados.preco_mercadoria.value;
var tipn = dados.tipo_negocio.value;
if (cod == ""){
alert('Preencha o campo código!');
dados.codigo_mercadoria.focus();
history.back();
return false;
}
else if (tip == ""){
alert('Preencha o campo tipo de mercadoria!!');
dados.tipo_mercadoria.focus();
history.back();
return false;
}
else if (nom == ""){
alert('Preencha o campo nome da mercadoria!');
dados.nome_mercadoria.focus();
history.back();
return false;
}
else if (qtd == ""){
alert('Preencha o campo quantidade da mercadoria!');
dados.qtd_mercadoria.focus();
history.back();
return false;
}
else if (preco == ""){
alert('Preencha o campo nome da mercadoria!');
dados.preco_mercadoria.focus();
history.back();
return false;
}
else if (tipn == ""){
alert('Selecione um tipo de negócio!');
dados.tipo_negocio.focus();
history.back();
return false;
}
}
function voltar()
{
location.href="inicio.php"
}
</script>
  </head>
  <body>
  <div class="corpo">
        <h1>Quais Operações você deseja fazer?</h1>
        <h3>Selecione a Operação</h3>
       <form action="" method="post" name="dados" onSubmit="return enviardados();" >
	    <table>
         <table width="588" border="0" align="center" >
    <tr>
      <td width="118"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">C&oacute;digo da Mercadoria:</font></td>
      <td width="460">
        <input name="codigo_mercadoria" type="text" class="formbutton" id="codigo_mercadoria" size="52" maxlength="150" onKeyPress="return SomenteNumero(event);">
      </td>
    </tr>
		 <tr>
      <td><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Tipo da Mercadoria: </font></td>
      <td><font size="2">
        <input name="tipo_mercadoria" type="text" id="tipo_mercadoria" size="52" maxlength="150" class="formbutton">
      </font></td>
    </tr>
    <tr>
      <td><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome da Mercadoria: </font></td>
      <td><font size="2">
        <input name="nome_mercadoria" type="text" id="nome_mercadoria" size="52" maxlength="150" class="formbutton">
      </font></td>
    </tr>
	
	 <tr>
      <td><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Quantidade: </font></td>
      <td><font size="2">
        <input name="qtd_mercadoria" type="text" id="qtd_mercadoria" size="52" maxlength="150" class="formbutton" onKeyPress="return SomenteNumero(event);">
      </font></td>
    </tr>
	
	 <tr>
      <td><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Preço da Mercadoria: </font></td>
      <td><font size="2">
        <input name="preco_mercadoria" type="text" id="preco_mercadoria" size="52" maxlength="150" class="formbutton" onKeyPress="return SomenteNumero(event);">
      </font></td>
    </tr>
	
	 <tr>
      <td><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Tipo do negócio: </font></td>
      <td><font size="2">
        <input name="tipo_negocio" type="radio" id="negocio_compra"  value="compra" class="formbutton">Compra <br>
		<input name="tipo_negocio" type="radio" id="negocio_venda"  value="venda" class="formbutton">Venda <br>
      </font></td>
   </table>
<center>
	  <input type="submit"  onclick="return validar()">
	 
        <input name="Reset" type="reset" class="formobjects" value="Redefinir">
		
		 <input type="button" value="Voltar"  onclick="voltar()">
     </center>
	 </td>
		
  </table>
  </form>
   </div>
<?php
if ($_POST){
$codigo = $_POST['codigo_mercadoria'];
$tipo = $_POST['tipo_mercadoria'];
$nome = $_POST['nome_mercadoria'];
$qtd = $_POST['qtd_mercadoria'];
$preco = $_POST['preco_mercadoria'];
$negocio = $_POST['tipo_negocio'];
$uso = mysql_query("SELECT * FROM mercadoria WHERE Codigo_Mercadoria ='$codigo'")or  die(mysql_error());
$linha = mysql_num_rows($uso);
if($linha!=0)
{
echo "<script>alert('O código desse produto já está cadastrado!'); history.back();</script>";
exit;
}

mysql_query("INSERT INTO mercadoria (Codigo_Mercadoria, Tipo_Mercadoria, Nome_Mercadoria, Qtd_Mercadoria, Preco_Mercadoria, Tipo_Negocio) VALUES('$codigo', '$tipo', '$nome', '$qtd', '$preco', '$negocio')") or die( mysql_error() );
echo "<script>alert('Produto cadastrado com sucesso!');</script>";
			    echo "<script>window.location.href = 'inicio.php'</script>";
}
	
?>

</body>

</html>
