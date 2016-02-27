<?php
$conecao = mysql_connect('127.0.0.1', 'root','') or die ("Não foi possivel conectar-se ao banco de dados");
mysql_select_db('mercadorias', $conecao) or die ("Banco de dados não encontrado");
$id = intval( $_GET['Id_Mercadoria'] );
?>
<!DOCTYPE html>
<!-- Comentários -->
<html>
  <head>
     <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     <title> Editar Mercadoria </title>
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
        <h1>ALTERAR DADOS</h1>
        <h3>**É somente permitida a alteração dos dados abaixo, qualquer outra alteração, procure o ADM</h3>
     <form action="" method="post" >
  <table width="588" border="0" align="center" >
 <tr>
      <td><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Tipo da Mercadoria: </font></td>
      <td><font size="2">
        <input name="update_tipo" type="text" id="update_tipo" size="52" maxlength="150" class="formbutton">
      </font></td>
    </tr>
    <tr>
      <td><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome da Mercadoria: </font></td>
      <td><font size="2">
        <input name="update_nome" type="text" id="update_nome" size="52" maxlength="150" class="formbutton">
      </font></td>
	    </tr>
		<tr>
      <td> <input type="button" value="Voltar"  onclick="voltar()"></td>
	     <td>
		 <input type="submit"  value="Alterar Dados" name = "alterar">
		 <input type="submit" value="Deletar Mercadoria" name="deletar">
		 </td>
    </tr>
	</table>
	</form>
<?php
if(isset($_POST["alterar"])){
$tipo = $_POST['update_tipo'];
$nome = $_POST['update_nome'];
if($tipo != "" && $nome ==""){
mysql_query("UPDATE  `mercadorias`.`mercadoria` SET  `Tipo_Mercadoria`  = '$tipo' WHERE  `mercadoria`.`Id_Mercadoria` ='$id'") or die( mysql_error() );
echo "<script>alert('Tipo da Mercadoria alterado com sucesso!');</script>";
			echo '<script>window.location="inicio.php";</script>';
}
else if($tipo == "" && $nome !=""){
mysql_query("UPDATE  `mercadorias`.`mercadoria` SET `Nome_Mercadoria`  = '$nome' WHERE  `mercadoria`.`Id_Mercadoria` ='$id'") or die( mysql_error() );
echo "<script>alert('Nome da Mercadoria alterado com sucesso!');</script>";
			echo '<script>window.location="inicio.php";</script>';}
else if($tipo != "" && $nome !=""){
mysql_query("UPDATE  `mercadorias`.`mercadoria` SET  `Tipo_Mercadoria`  = '$tipo' , `Nome_Mercadoria`  = '$nome' WHERE  `mercadoria`.`Id_Mercadoria` ='$id'") or die( mysql_error() );
echo "<script>alert('Dados da Mercadoria alterados com sucesso!');</script>";
			echo '<script>window.location="inicio.php";</script>';
}}
else if(isset($_POST["deletar"])){
mysql_query("DELETE FROM `mercadoria` WHERE `Id_Mercadoria` = '$id'");
echo "<script>alert('Mercadoria deletada com sucesso!');</script>";
echo "<script>window.location.href = 'inicio.php'</script>";
}
?>

       </div>
  </body>

</html>
