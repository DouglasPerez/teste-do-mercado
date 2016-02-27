<!DOCTYPE html>
<!-- Comentários -->
<html>
  <head>
     <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     <title> Início </title>
     <link rel = "Stylesheet" type = "text/css" href = "CSS.css" />
	 <script type="text/javascript">
function Cadastro()
{
location.href="cadastro.php"
}

function Consultar()
{
location.href="consultar.php"
}
</script>
  </head>

  <body>
        <div class="corpo">
        <h1>Quais Operações você deseja fazer?</h1>
        <h3>Selecione a Operação</h3>
        <table>
                <tr>
                        <form>
<table>
<tr>
      <td>
		<input type="button" value="Cadastrar Mercadoria" onClick="Cadastro()">      
	</td>
	  <td>
		<input type="button" value="Consultar Mercadoria" onClick="Consultar()">      
	  </td>
	</tr>
  </table>
                
        </table>
       </div>
  </body>

</html>
