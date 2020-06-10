<body>
    <ion-tabs>
        <ion-tab tab="tab-inicio">
            <ion-nav>
                <ion-header>
                    <ion-toolbar>
                        <ion-buttons slot="secondary">
                            <ion-button color="success">
                                <ion-icon slot="icon-only" name="qr-code-outline"></ion-icon>
                            </ion-button>
                        </ion-buttons>
                        <ion-buttons slot="primary">
                            <ion-button color="success">
                                <ion-icon slot="icon-only" name="gift-outline"></ion-icon>
                            </ion-button>
                            <ion-button color="success">
                                <ion-icon slot="icon-only" name="basket-outline"></ion-icon>
                            </ion-button>
                        </ion-buttons>
                        <ion-title>
                            <span class="font-weight-light texto-pequeno">Meu Saldo</span>
                            <br />
                            R$
                            <?= $this->session->saldo; ?>
                        </ion-title>
                    </ion-toolbar>
                </ion-header>

                <ion-content>
                    <div color="success" class="full-card">
                        <ion-card-header>
                            <ion-card-subtitle>Sugestões para você</ion-card-subtitle>
                        </ion-card-header>

                        <ion-card-content>
                            <ion-grid>
                                <ion-row>
                                    <ion-col>
                                        <div class="box">
                                            <img class="imagem-redonda" src="https://www.traycorp.com.br/wp-content/uploads/2020/03/cielo.jpg" />
                                            <br />
                                            <b>Cielo</b>
                                        </div>
                                    </ion-col>

                                    <ion-col>
                                        <div class="box">
                                            <img
                                                class="imagem-redonda"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAdVBMVEUAAAD////Y2Nivr6/GxsYyMjL29va7u7tcXFyXl5csLCy/v78oKCj8/PzNzc3g4ODv7++np6eDg4Pn5+d1dXUdHR2MjIwLCwuhoaEjIyNycnJQUFBnZ2fx8fE7OztKSkpCQkKHh4cTExNiYmJVVVU3Nzerq6subrrmAAAEi0lEQVR4nO3a6XaiMACGYQQbVxDFhVqtdrrc/yWOLCGBJOqhyDjnvM+vYmLMxxYS6nkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA8EiDwsxVHhXli3xjVGwMe+tdF0TR6ZGrfFiU+/lGcGN3PCUSkvD5kZCEz4+EJHx+JLyRcPP+dn6564em0+mf33W1pV8k3HwM42M4CEW8WB6u/cbmY5bEQohjEk3ejbJVbpdtnLc/o2E0/k0eU+uEp7KkJNKdo4VxVKu42NdKX8qPL8d3vCj+XHcUrdQy4byeLxOmtu+ffKNi8mkmDHey8SdJuA+NfmddPxlfn9jqDQIzoTerSp8g4ejD2m9L58wjrTenJRSpu5F/kNB6AAvbuwLKNQOV8Npu+gcJpXCRrg6H9TYS6rOD+d2LeLkan8er4Fh9IldCGglDIcLnSRhUd/7NVmVUo2N1DSaqz6sq49ZMKNKv73nnw2brhMlZr7Ybyc+r8+9c7Ylag3LsCL/zTS2hsw+/0zah8eS2ahwcz29sS0EtkEpoHWw60DKhZUHxoyyKi81P6xHMyKOYn+RVwqiLNDbtEsa2qvJE/ci3ImfN1/JevMw2qoTmWNqRdgk/rXWFVlf23PbAmmrhZb2HHcJ2CR3d2ZbFG/W39WDLhfbstisTNq/W7rRK6BqxyuKV+t7kWqNZKpnQflZ0oU1C4ZpGlNdeoNoNJjZaPZmwOavqTpuEC1flVJ3Egztk9WTCaefJpFZP3q7K5QiRXO6X9yS81HvShEtX5beiXHje+z0Js9vQ4xOWz4nOV4L+f5+wXDlwXlqJJaHzgO+L8svZ9+d5EsqptaN4qo/iLe40h/EVX14fCeXc2vHQdBhYEopXR2PaKBAXf96c6z0+YXliWR6QczNbwlsj/l598eYr/8cnlL0KraN49VxcT+jb6nreUjvj5WTKdbibv/DAhHIa92MrHNoT2g/iPFSXYTUg3prW9pBwLXv9ZpbJOZ6RUNhakvO+YslX7hzbCvZK/VYPCXdy5SQ0TqiTWlRrzoAtt9OfetFJNjs3ao61qUQPCdWCkTjXCz61JTRjFcPfNJqRF+FArtrLgxh/N2rm9+dhud7UR0I56F92d22u8zPQmCtRce30m1YvJ6q5o5zKDxrLg+WuiIu5cS8JT6rbx7Tc4e9L7QBaE16yVFfTRhVoM6t99eFCzf7UcuKwv4RqmSzvoh9FvrGqbV0RHsSzyXq/HWkvX0L9fqW9tBDDdL1fBdprqPJy7Sehp700aLI9lybOZf3w6+52+7wOPbXCYjikloQ/e0dt0RxxnO1WV2tfCb23o60f8bu839QSBt45tlW3PKKNrRW1dafeEl5uncapJ7J5oD3h5QQ0qid7a7upaFYcRNqb/x4Tei/LpNbh9FULVfsP2vxJbJrWDo9vz+dlr20WesVjUDuVv8uP7/t3h187T2aLMHtrNkzPsn/z3Ku+IQf7t3SY3XSO/mhtPrjo5usgSuIw8WcT49lwWrTZYQoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAuOovC1QyKDY/qsgAAAAASUVORK5CYII="
                                            />
                                            <br />
                                            <b>Uber</b>
                                        </div>
                                    </ion-col>
                                    <ion-col>
                                        <div class="box">
                                            <img class="imagem-redonda" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR-hTunynu5iKQjjxY_zx_NihzZ9oxBolCgDA8Q4Si3tJOEZW5O&usqp=CAU" />
                                            <br />
                                            <b>Pagamentos</b>
                                        </div>
                                    </ion-col>
                                </ion-row>
                            </ion-grid>
                        </ion-card-content>
                    </div>
                    <ion-item-divider>
                        <ion-label>
                            ATIVIDADES
                        </ion-label>
                    </ion-item-divider>
                    <ion-card>
                        <ion-card-content>
                            Nenhuma atividade.
                        </ion-card-content>
                    </ion-card>
                </ion-content>
            </ion-nav>
        </ion-tab>

        <ion-tab tab="tab-carteira">
            <ion-nav>
            <ion-toolbar color="success">
                    <ion-buttons slot="primary">
                        <ion-button>
                            <ion-icon slot="icon-only" ios="ellipsis-horizontal" md="ellipsis-vertical"></ion-icon>
                        </ion-button>
                    </ion-buttons>
                </ion-toolbar>
                <div class="full-card text-center">
                    <br>
                    <h5 class="text-white font-weight-light">Saldo PicPay</h5>
                    <h1 class="text-white" id="csaldo">R$ <?= $this->session->saldo; ?></h1>
                    <h5 class="text-white texto-pequeno">Seu saldo está redendo 100% do CDI</h5>
                    <br>
                    <div class="row container">
                        <div class="col">
                    <button type="button" class="btn btn-outline-light btn-lg btn-block" data-toggle="modal" data-target="#add"><ion-icon name="cash-outline"></ion-icon><br> Adicionar</button>
                    </div><div class="col"><button type="button" class="btn btn-outline-light btn-lg btn-block" data-toggle="modal" data-target="#retirar"><ion-icon name="business-outline"></ion-icon><br> Retirar</button>
                    </div></div>
                    <br>
            </div>
            <ion-item-divider>
                        <ion-label>
                            Formas de pagamento 
                        </ion-label>
            </ion-item-divider>

            <?php if(!$cartoes){?>
            <?php }else{ ?>
                <?php foreach($cartoes as $cc) {?>    
                <ion-item>
                    <ion-thumbnail slot="start">
                     <i class="fab fa-cc-mastercard fa-3x"></i>
                    </ion-thumbnail>
                    <ion-label>
                        <h2 id="view_numero" ><?= $cc->numero; ?></h2>
                        <p><?= $cc->validade; ?></p>
                    </ion-label>
                    
                </ion-item>
                <?php }?>        
            <?php }?>

            <br>
            <div class="container">
            <button type="button" class="btn btn-outline-success btn-lg btn-block font-weight-bolder" data-toggle="modal" data-target="#cartao"><i class="fas fa-plus"></i> Adicionar cartão de credito</button>
            </div>
            </ion-nav>
        </ion-tab>

        <ion-tab tab="tab-notificacoes">
            <ion-nav>
                <ion-toolbar color="success">
                    <ion-buttons slot="primary">
                        <ion-button>
                            <ion-icon slot="icon-only" ios="ellipsis-horizontal" md="ellipsis-vertical"></ion-icon>
                        </ion-button>
                    </ion-buttons>
                    <ion-title>Notificações</ion-title>
                </ion-toolbar>

                <ion-card>
                    <ion-card-content>
                        Nenhuma notificação.
                    </ion-card-content>
                </ion-card>
            </ion-nav>
        </ion-tab>

        <ion-tab tab="tab-ajustes">
            <ion-nav>
                <ion-toolbar color="success">
                    <ion-buttons slot="primary">
                        <ion-button>
                            <ion-icon slot="icon-only" ios="ellipsis-horizontal" md="ellipsis-vertical"></ion-icon>
                        </ion-button>
                    </ion-buttons>
                    <ion-title>Ajustes</ion-title>
                </ion-toolbar>
                <br />
                <div class="text-center">
                    <img src="https://www.marilandiadosul.pr.leg.br/imagens/sem-foto.jpg/image" class="foto-redonda" alt="..." />
                </div>
                <p class="text-center font-weight-bold">@<?= $this->session->tagname; ?></p>
                <br />
                <br />
                <ion-content>
                <ion-item-divider>
                    <ion-label>
                        MINHA CONTA
                    </ion-label>
                </ion-item-divider>
                <ion-list class="font-weight-lighter">
                    <ion-item>
                        <ion-label>
                            <h2>Meu Picpay</h2>
                            <p>@<?= $this->session->tagname; ?></p>
                        </ion-label>
                        
                    </ion-item>
                    <ion-item>
                        <ion-label>
                            <h2>Meu número</h2>
                            <p><?= $this->session->celular; ?></p>
                        </ion-label>
                    </ion-item>
                    <ion-item>
                        <ion-label>
                            <h2>Meu e-mail</h2>
                            <p><?= $this->session->email; ?></p>
                        </ion-label>
                    </ion-item>
                    <ion-item>
                        <ion-label>Alterar dados pessoais</ion-label>
                    </ion-item>
                    <ion-item href="sair">
                        <ion-label>Sair da conta</ion-label>
                        
                    </ion-item>
                </ion-list>
                </ion-card-content>
            </ion-nav>
        </ion-tab>

        <ion-tab tab="tab-pagar">
            <ion-nav></ion-nav>
        </ion-tab>

        <ion-tab-bar slot="bottom">
            <ion-tab-button tab="tab-inicio" color="success">
                <ion-icon name="home-outline"></ion-icon>
                <ion-label>Inicio</ion-label>
            </ion-tab-button>

            <ion-tab-button tab="tab-carteira">
                <ion-icon name="wallet-outline"></ion-icon>
                <ion-label>Carteira</ion-label>
            </ion-tab-button>

            <ion-tab-button tab="tab-notificacoes">
                <ion-icon name="notifications-outline"></ion-icon>
                <ion-label>Notificações</ion-label>
            </ion-tab-button>

            <ion-tab-button tab="tab-ajustes">
                <ion-icon name="settings-outline"></ion-icon>
                <ion-label>Ajustes</ion-label>
            </ion-tab-button>
        </ion-tab-bar>
    </ion-tabs>
    <ion-fab vertical="bottom" horizontal="center" slot="fixed">
        <ion-fab-button color="success" data-toggle="modal" data-target="#pagar">
            <i class="fas fa-dollar-sign fa-2x"></i>
        </ion-fab-button>
    </ion-fab>
</body>


<!-- Modal cartao -->
<div class="modal fade" id="cartao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cartaoLabel">Adicionar Cartão de Credito</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Preencha os campos abaixo com os dados do seu cartão</p>

        <form id="add-cartao">
            <div class="form-group">
                <label>Numero do cartão</label>
                <input type="text" class="form-control" id="numero" name="numero">
            </div>
            <div class="form-group">
                <label>Validade</label>
                <input type="text" class="form-control" id="validade" name="validade">
            </div>
            <div class="form-group">
                <label>Código Segurança</label>
                <input type="text" class="form-control" id="cvv" name="cvv">
            </div>
            <div class="form-group">
                <label>Nome Impresso no Cartão</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Salvar</button></form>
      </div>
    </div>
  </div>
</div>

<!-- Modal adicionar -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h1 class="text-center font-weight-light">Quanto você quer adicionar?</h1>
        <br>
      <form id="add-dinheiro">
        <div class="form-group">
            <input class="form-control form-control-lg" type="text" name="saldo" id="saldo" placeholder="0,00">
        </div>
      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success">Enviar</button></form>
      </div>
    </div>
  </div>
</div>

<!-- Modal pagar -->
<div class="modal fade" id="pagar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h1 class="text-center font-weight-light">O que você deseja pagar?</h1>
        <br>
      <form id="add-pagar">
        <div class="form-group">
            <input class="form-control form-control-lg" type="text" id="tagname" name="tagname">
        </div>
      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success">Pagar</button></form>
      </div>
    </div>
  </div>
</div>










<script type="text/javascript">
$("#add-cartao").submit(function(event){
	event.preventDefault(); //prevent default action 
	var form_data = $(this).serialize(); //Encode form elements for submission
	
	$.ajax({
		url : "<?php echo site_url('app/add_cartao')?>",
		type: 'POST',
		data : form_data
	}).done(function(response){ //
        $('#cartao').modal('hide');

        $('#csaldo').replaceWith('R$ <?= $this->session->saldo; ?>');
        swal({title: "Pronto!", text: "Cartão adicionado com sucesso a sua conta!", type: 
            "success"}),(function(){ 
              window.location.reload();
              }
            );
	});
});
$('#autocomplete').autocomplete({
    serviceUrl: '<?php echo site_url('app/tagname')?>"',
    onSelect: function (suggestion) {
        alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
    }
});
</script>
<script type="text/javascript">
$("#add-dinheiro").submit(function(event){
	event.preventDefault(); //prevent default action 
	var form_data = $(this).serialize(); //Encode form elements for submission
	
	$.ajax({
		url : "<?php echo site_url('app/add_dinheiro')?>",
		type: 'POST',
		data : form_data
	}).done(function(response){ //
        $('#add').modal('hide');
     
        swal({title: "Pronto!", text: "Foi adicionado fundos na sua conta!", type: 
            "success"}),(function(){ 
              window.location.reload();
              }
            );
	});
});
</script>
<script type="text/javascript">
	$(document).ready(function($){
		$('#numero').mask("0000 0000 0000 0000 999");
        $('#validade').mask("00/0000");
        $('#cvv').mask("0009");
        $('#saldo').mask("00099999");

        txt = $.trim($('#view_numero').text());
        $('#view_numero').text(txt.substring(0, txt.length - 10) + " **** ****");
	});
</script>
</html>