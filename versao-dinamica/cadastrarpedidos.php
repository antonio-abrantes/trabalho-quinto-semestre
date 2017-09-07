<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de compras</title>

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/estilo.css" rel="stylesheet" type="text/css" media="all">

</head>
<body>


</div>
<div class="container" style="margin-top: 8%;border:1px solid black;">
    <form class="form-horizontal" method="POST">
        <div class="row col-md-6" style="width: 450px;padding:0;">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nome">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nome">R$:</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option>Escolha uma forma de pagamento</option>
                            <option>Dinheiro</option>
                            <option>Crédito</option>
                            <option>Débito</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-2" for="nome">Troco:</label>
                    <div class="col-sm-4">
                        <div class="checkbox">
                            <label><input type="checkbox" value="sim"> Sim</label>
                            <label><input type="checkbox" value="nao"> Não</label>
                        </div>

                    </div>
                    <div class="col-sm-6">

                        <input type="text" class="form-control" id="nome" placeholder="Digite o valor" name="nome">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="nome">Desconto:</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" placeholder="Total Desconto :" name="nome">
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nome">Motivo:</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" placeholder="Digite o motivo do desconto:"
                               name="nome">
                    </div>

                </div>

                <!-- INPUT QUE SOMA A TAXA DOS ENTREGADORES-->

                <div class="form-group">
                    <label class="control-label col-sm-2" for="nome">Taxa:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="nome" value="4.50" name="nome" disabled>
                    </div>
                    <label class="control-label col-sm-4" for="nome">Total a pagar:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="total" value="" name="nome" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" style="float: right;margin-right: 10px;">Finalizar
                        Pedido
                    </button>
                    <button type="button" class="btn btn-default" style="float: right;">Limpar</button>


                </div>
                <!-- INPUT QUE SOMA A TAXA DOS ENTREGADORES-->


            </div>
        </div>
    </form>

    <!-- Inicio da parte dos itens -->
    <div class="row col-md-6" style="width:650px;height: 500px;margin-left: 50px; overflow: auto;padding: 0;">
        <table class="table">
            <thead class="thead-inverse">
            <tr style="background: #55595c; color: white;">
                <th>Item</th>
                <th style="width: 180px;">Produto</th>
                <th>Quantidade</th>
                <th>Tamanho</th>
                <th>Valor</th>
                <th style="width: 100px;">+</th>
            </tr>
            </thead>
            <tbody id="list-produtos">

                <?php
                //
                //include_once('inc/config_bd.php');
                //include_once('view/item.php');
                ?>

            </tbody>
        </table>
        <div>
            <button id="add-item" class="btn btn-warning-lg">ADD ITEM</button>
        </div>
    </div>
</div>

<!-- FIM da parte dos itens -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src='js/funcoes.js' type='text/javascript'></script>

</body>
</html>