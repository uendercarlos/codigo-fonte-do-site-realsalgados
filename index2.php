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
    <link href="css/heroic-features.css" rel="stylesheet">
    

  </head>

  <body>
  <?php
$salgado_carne	= $_POST ['salgado_carne'];	
$coxinha_frango	= $_POST ['coxinha_frango'];	
$salgado_salsicha	= $_POST ['salgado_salsicha'];	
$salgado_calabresa = $_POST ['salgado_calabresa'];
$salgado_presunto_queijo	= $_POST ['salgado_presunto_queijo'];	
$suco	= $_POST ['suco'];	
?>
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
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
  <br>
  <br>
  <br>
  <br>

    <!-- Page Content -->
  
    <!-- /.container -->
    
    	<form action="index3.php" method="POST"> 
 
 <!--
 <input class="form-control form-control-lg" type="text" placeholder="NOME">
 
 <input class="form-control form-control-lg" type="text" placeholder="TELEFONE">
 
 <div class="form-group">
    <label for="exampleFormControlSelect1"></label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>BAIRRO</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
 
 <input class="form-control form-control-lg" type="text" placeholder="RUA">
 <input class="form-control form-control-lg" type="text" placeholder="NUMERO">
 <input class="form-control form-control-lg" type="text" placeholder="REFERÊNCIA">
 
 
 
 
 
 
 
 
  <input align="center" type="reset" src="imagens/botao_deletar.png" value="Voltar"onClick="history.go(-1)"> 
   <input align="center"  type="image"  src="imagens/botao_confirmar.jpg"  width="150" height="80" >
   <input align="center" type="reset" src="imagens/botao_deletar.png" value="Limpar" > 
 -->
 
   <div  align="center">
  		<fieldset >
  				<table cellpadding="8">
  			 <legend>Dados pessoais</legend>



		<tr><td>Nome:</td> <td><input type="text" name="nome" size="22"  required /></td>
		
		<tr><td>Telefone XX-9XXXX-XXXX</td> <td><input  id="phonenum" type="tel" name="telefone" size="22" /></td> 
		
		

		
		
		
		
	 
	
	    <tr><td>Bairro:</td><td> <select name="bairro" required >
								<option disabled selected><h1>Selecionar</h1>  </option>
    						    <option value="Central">Central</option>
                                <option value="Jardim Urânio"> Jardim Urânio   </option>
                                <option value="Loteamento dos Funcionários"> Loteamento dos Funcionários  </option>
                                <option value="Setor Leste"> Setor Leste   </option>
                                <option value="Setor Planalto"> Setor Planalto   </option>
                                <option value="Vila Itajuba"> Vila Itajuba </option>
                                <option value="Vila Rica"> Vila Rica </option>
                                <option value="Vila Brasilia"> Vila Brasilia </option>


n>
			 </select> </td>
		
		<tr><td>Rua: </td> <td><input type="text" name="rua" size="22" required /></td>
 		
		<tr><td>Numero: </td> <td><input type="text" name="numero" size="22" required /></td>
		
		<tr><td>Referencia: </td> <td><input type="text" name="referencia" size="22" required /></td>
		
     
  </table>
 </fieldset> 
 
 
 
 
 
 
 
  <br>
  <div >
  
  
  
   <input align="center" type="reset" src="imagens/botao_deletar.png" value="Voltar"onClick="history.go(-1)"> 
   <input align="center"  type="image"  src="imagens/botao_confirmar.jpg"  width="150" height="80" >
   <input align="center" type="reset" src="imagens/botao_deletar.png" value="Limpar" > 
  
 
    <input type="hidden" name="salgado_carne" value="<?php echo $salgado_carne ?>">
    <input type="hidden" name="coxinha_frango" value="<?php echo $coxinha_frango ?>">
    <input type="hidden" name="salgado_salsicha" value="<?php echo $salgado_salsicha?>">
    <input type="hidden" name="salgado_calabresa" value="<?php echo $salgado_calabresa ?>">
    <input type="hidden" name="salgado_presunto_queijo" value="<?php echo $salgado_presunto_queijo ?>">
    <input type="hidden" name="suco" value="<?php echo $suco?>">
     
</form>
</div>
   
   <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
     
    </footer> 
  

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>





  </body>

</html>
