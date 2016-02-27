<?php
$conecao = mysql_connect('127.0.0.1', 'root','') or die ("Não foi possivel conectar-se ao banco de dados");
mysql_select_db('mercadorias', $conecao) or die ("Banco de dados não encontrado");
?>
<!DOCTYPE html>
<!-- Comentários -->
<html>
  <head>
     <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     <title>Consultar Mercadorias</title>
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
function voltar()
{
location.href="inicio.php"
}
</script>
  </head>

  <body>
        <div class="corpo">
        <h1><center>
Consulta por Código da Mercadoria
<br />
<form action="" method="post" name="dados" onSubmit="return enviardados();" >
 <input name= "consulta_codigo" input type="text"	 size="20" maxlength="50" onKeyPress="return SomenteNumero(event);">
 <input type="submit"  value="Consultar Por Código da Mercadoria" name= "codigo">
<br />  <input type="button" value="Voltar"  onclick="voltar()">
<input type="submit"  value="Consultar Todos as Mercadorias Cadastradas" name = "todas">
</form>
<h3>
<?php
if(isset($_POST["todas"])){
$consultarall = mysql_query("SELECT * FROM  `mercadoria`")or  die(mysql_error());
$contador = mysql_affected_rows($conecao); 
if ($contador > 0) {
while($row = mysql_fetch_array($consultarall)){
$id=$row['Id_Mercadoria'];
$codigomercadoria = $row['Codigo_Mercadoria'];
$tipomercadoria = $row['Tipo_Mercadoria'];
$nomemercadoria = $row['Nome_Mercadoria'];
$qtdmercadoria = $row['Qtd_Mercadoria'];
$precomercadoria = $row['Preco_Mercadoria'];
$tiponegocio = $row['Tipo_Negocio'];
echo "	<br />
		<br />
		<center>Resultado da Pesquisa</center>
		<form>
		<table border=\"1\" align=\"center\">
		<tr></tr>
		<td>Codigo da Mercadoria: $codigomercadoria</td>
		<tr></tr>
		<tr></tr>
		<td>Tipo da Mercadoria: $tipomercadoria</td>
		<tr></tr>
		<tr></tr>
		<td>Nome da Mercadoria: $nomemercadoria</td>
		<tr></tr>
		<tr></tr>
		<td>Quantidade da Mercadoria: $qtdmercadoria</td>
		<tr></tr>
		<tr></tr>
		<td>Preço da Mercadoria: $precomercadoria</td>
		<tr></tr>
		<tr></tr>
		<td>Tipo de Negócio: $tiponegocio</td>
		<tr></tr>
		<td><center><a href="."editar.php?Id_Mercadoria=$id><input type="."button"." value="."EDITAR"."></a></center></td>
		</form>
		</table>
		";	
}}
else {
echo"Não Existem Mercadorias Cadastradas";
}
}
else if(isset($_POST["codigo"])){
$codigo = $_POST['consulta_codigo'];
$_SESSION['consulta_codigo'] = $codigo;
$consultacod = mysql_query("SELECT * FROM  `mercadoria` WHERE  `Codigo_Mercadoria` = $codigo")or  die(mysql_error());
$cont = mysql_affected_rows($conecao); 
if ($cont > 0) {
while($row = mysql_fetch_array($consultacod)){
$id=$row['Id_Mercadoria'];
$codigomercadoria = $row['Codigo_Mercadoria'];
$tipomercadoria = $row['Tipo_Mercadoria'];
$nomemercadoria = $row['Nome_Mercadoria'];
$qtdmercadoria = $row['Qtd_Mercadoria'];
$precomercadoria = $row['Preco_Mercadoria'];
$tiponegocio = $row['Tipo_Negocio'];
echo "	<br />
		<br />
		<center>Resultado da Pesquisa</center>
		<form>
		<table border=\"1\" align=\"center\">
		<tr></tr>
		<td>Codigo da Mercadoria: $codigomercadoria</td>
		<tr></tr>
		<tr></tr>
		<td>Tipo da Mercadoria: $tipomercadoria</td>
		<tr></tr>
		<tr></tr>
		<td>Nome da Mercadoria: $nomemercadoria</td>
		<tr></tr>
		<tr></tr>
		<td>Quantidade da Mercadoria: $qtdmercadoria</td>
		<tr></tr>
		<tr></tr>
		<td>Preço da Mercadoria: $precomercadoria</td>
		<tr></tr>
		<tr></tr>
		<td>Tipo de Negócio: $tiponegocio</td>
		<tr></tr>
		<td><center><a href="."editar.php?Id_Mercadoria=$id><input type="."button"." value="."EDITAR"."></a></center></td>
		</form>
		</table>
		";	
		}
}
else{
echo"A pesquisa não retornou resultados";
}}
?>
</h3>
<br />
</center></h1>
</div>

</body>

</html>
