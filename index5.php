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
  <br><br>
  <br>
  

    <!-- Page Content -->
   
    <!-- /.container -->
    <marquee direction=up behavior="alternate"></marquee>
    	
   
    
   <?php
$host= 'localhost';
$userbd= 'id6641706_real_salgados';
$senhabd= 'qwe123';
$bd = 'id6641706_real_salgados';



$conexao = mysqli_connect($host,$userbd,$senhabd,$bd) or die( 'Erro de conexao ao BD: '.mysqli_error( $conexao ) );

$sql = "SELECT * FROM `produtos_pedidos` ORDER BY `id`desc";

$rs = mysqli_query($conexao, $sql);



echo '<table border="1" cellpadding="5"   align="center">
			<tr bgcolor="#00FF00" text-align:"center">
				<td><b>Id</b></td>
				<td><b>salgado_carne</b></td>
				<td><b>coxinha_frango</b></td>
				<td><b>salgado_salsicha</b></td>
				<td><b>salgado_calabresa</b></td>
				<td><b>salgado_presunto_queijo</b></td>
				<td><b>suco</b></td>
				
			</tr>';


while($reg = mysqli_fetch_assoc($rs)){
echo '<tr>';
		echo '<td>'.$reg['id'].'</td>';
		echo '<td>'.$reg['salgado_carne'].'</td>';
		echo '<td>'.$reg['coxinha_frango'].'</td>';
        echo '<td>'.$reg['salgado_salsicha'].'</td>';
		echo '<td>'.$reg['salgado_calabresa'].'</td>';
		echo '<td>'.$reg['salgado_presunto_queijo'].'</td>';
		echo '<td>'.$reg['suco'].'</td>';
		echo '<tr>';
}
echo '</table';

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
