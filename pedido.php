<!DOCTYPE html>
<html lang="pt">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="root" >

    <title>Real Salgados</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    
    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="imagens/salgados_logo.png" width="200" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <br>
  <br>

    <!-- Page Content -->
   
    
    <!-- /.container -->
    <marquee direction=up behavior="alternate"></marquee>
    	
   
    
   <?php
$host= 'localhost';
$bd= 'id6641706_real_salgados';
$senhabd= 'qwe123';
$userbd = 'id6641706_real_salgados';



$conexao = mysqli_connect($host,$userbd,$senhabd,$bd) or die( 'Erro de conexao ao BD: '.mysqli_error( $conexao ) );

$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT * FROM `produtos_pedidos` WHERE id = '$id'";

$sql2 = "SELECT * FROM `cliente` WHERE id = '$id'";

$rs = mysqli_query($conexao, $sql);

$rs2 = mysqli_query($conexao, $sql2);

$reg = mysqli_fetch_assoc($rs);

$reg2 = mysqli_fetch_assoc($rs2);


echo '<div  align="center"><font size="20px" color="blue"><b><blink>'.$reg2['nome'].'</b></blink></font></div>';

	   
   echo '<table border="1"   CELLSPACING="2" align="center"  width=300 height=400>
			<tr  >
				<td bgcolor="#00FF00"><b>Id</b></td>
				<td width=300>'.$reg['id'].'</td>
			</tr>	
				<td bgcolor="#00FF00"><b>Salgado_carne</b></td>
				<td>'.$reg['salgado_carne'].'</td>
			</tr>
			<tr>	
				<td bgcolor="#00FF00"><b>Coxinha_frango</b></td>
				<td>'.$reg['coxinha_frango'].'</td>
			</tr>
			<tr>	
				<td bgcolor="#00FF00"><b>Salgado_salsicha</b></td>
				<td>'.$reg['salgado_salsicha'].'</td>
			</tr>
		
			<tr>	
				<td bgcolor="#00FF00"><b>Salgado_calabresa</b></td>
				<td>'.$reg['salgado_calabresa'].'</td>
			</tr>
			
			<tr>	
				<td bgcolor="#00FF00"><b>Salgado_presunto_queijo</b></td>
				<td>'.$reg['salgado_presunto_queijo'].'</td>
			</tr>
			
			<tr>	
				<td bgcolor="#00FF00"><b>Suco</b></td>
				<td>'.$reg['suco'].'</td>
			</tr>
			
			
			</table>';

mysqli_close($conexao);
	
?>

<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>


