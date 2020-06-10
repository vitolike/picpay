<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <title>Picpay - Login</title>
        <!-- CSS -->
        <link rel="stylesheet" href="<?= base_url(); ?>public/css/app.css" />

        <!-- Ionic -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
        <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />

        <!-- Icones -->
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
        <script src="https://kit.fontawesome.com/6728d0711b.js" crossorigin="anonymous"></script>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
        <!-- Sweetalert -->
        <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
        <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
        
        <!-- JS de mascara -->
        <script src="<?= base_url(); ?>public/js/jquery.maskedinput-1.1.4.pack.js"></script>
    
    
    </head>

    <body class="login-body">

    <div class="login-box text-center">

        <img src="https://logodownload.org/wp-content/uploads/2018/05/picpay-logo-1.png" class="img-fluid" >
        <br>
        <h5 class="font-weight-bolder text-white">Envie e receba dinheiro pelo smartphone</h5>
        <br>
        <br>
        <button type="button" class="btn btn-light btn-lg" data-toggle="modal" data-target="#novo">Criar minha conta no PicPay!</button>
        <br>
        <br>
        <button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#logar">Já sou cadastrado</button>
    </div>


    <!-- Modal Novo -->
<div class="modal fade" id="novo" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="novoLabel">Criar conta!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> <p>Olá, primeiro precisamos que informe seus dados abaixo.</p>
      <form id="criar">
        <div class="form-group">
            <label for="formGroupExampleInput">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Victor">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" placeholder="Ex: (11) 99999-9999">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Nome de usuário</label>
            <input type="text" class="form-control" id="tagname" name="tagname" placeholder="Ex: vitao">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Crie uma senha</label>
            <input type="password" class="form-control" name="senha" id="senha">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Criar Conta!</button></form>
      </div>
    </div>
  </div>
</div>
   <!-- Modal logar -->
   <div class="modal fade" id="logar" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logarLabel">Logar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> <p>Olá, preencha seus dados abaixo.</p>
      <form method="post" role="form" action="<?= base_url(); ?>app/logar">
        <div class="form-group">
            <label for="formGroupExampleInput2">Nome de usuário</label>
            <input type="text" class="form-control" name="tagname" placeholder="Ex: vitao">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Senha</label>
            <input type="password" class="form-control" name="senha">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Entrar!</button></form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$("#criar").submit(function(event){
	event.preventDefault(); //prevent default action 
	var form_data = $(this).serialize(); //Encode form elements for submission
	
	$.ajax({
		url : "<?php echo site_url('app/criar_conta')?>",
		type: 'POST',
		data : form_data
	}).done(function(response){ //
        $('#novo').modal('hide');
        swal("Parabens!", "Agora você faz parte do picpay! já pode logar com sua conta.", "success");
	});
});
</script>
<script type="text/javascript">
	$(document).ready(function($){
		$('#celular').mask("(00) 0000-00009");
	});
</script>



    </body>
</html>
