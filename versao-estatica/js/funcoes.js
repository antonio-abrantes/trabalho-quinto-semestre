$(function () {

	//Atualiza os campos para os valores iniciais
	atualizaValores();

	/*
	*
	* Cada select ao ser povoado pelo PHP, o seu atributo value rece o preço do do produco que preenche o campo
	* Quando um select é selecionado, o campo com a classe preco referente a seu bloco é atualizado
	* **/
    $('body').on("change", ".selecionar", function(){

        var produto = $(this).parent().parent().parent();

        var tagPreco = $(produto).find("span");

        var preco = parseFloat($(this).val());

        //console.log(preco);
        tagPreco.text(preco);
        atualizaValores();

    });

    /*
    * Função referente aos campos de quantidade, ao mudar o valor, o atulaizaValores é acionado para calcular o novo total
    * **/
    $("#list-produtos").on("change", ".quantidade", function () {
		atualizaValores();
    });


	/*
	* A funçao atualiza valores pega todos os campos com classe produto, e busca pelos seus preços e faz os calculos,
	* ao final do laço, é atribudo o valor total ao campo com id total.
	* **/
    function atualizaValores() {
        var produtos = document.getElementsByClassName("produto");

        var resultado = 0;

        for(var pos = 0; pos < produtos.length; pos++) {

            var precoElements = produtos[pos].getElementsByClassName("preco");
            var precoText = precoElements[0].innerHTML;

            var qtdElements = produtos[pos].getElementsByClassName("quantidade");
            var qtdText = qtdElements[0].value;

            //console.log(priceText+", Qtd: "+qtyText);

            var preco = parseFloat(precoText);
            var qtd = parseInt(qtdText);

            //console.log(precoText+", "+qtd);

			resultado += preco * qtd;

			//console.log(resultado);
        }

        $("#total").text(resultado.toString());
    }

    //Função que escuta o botão de adicionar item e chama a função ajax
    $( "#add-item" ).on( "click", REQ_AJAX_GET);


    //Função que faz a requisição do fragmento de html que será colocado na tabela...
    function REQ_AJAX_GET() {
        $.get(
            'campo.html',
            function(data) {
                $("#list-produtos").append(data);
            }
        );
    }

    /*
     * Função do botão remover
     * **/
    remover = function(item) {
        var tr = $(item).closest('tr');

        tr.fadeOut(400, function() {
            tr.remove();
            atualizaValores();
        });
    };

    //Outra função para remover, mas essa é feita atravez da classe
    // $('body').on("click", ".remover", function(){
    //
    //     var $produto = $(this).parent().parent();
    //     //console.log($produto);
    //     $($produto).remove();
    //     atualizaValores();
    // });


    /*
    * Função ainda não concluida, apenas para exmplificar a logica que será utilizada
    * **/
    function AJAX_REQ_PHP() {
        $.ajax({
            url: "pagina.php",  //Nome da pagina a ser resivitada no PHP
            type: "GET", //Metodo de envio dos dados
            data: {acao: 'nome_funcao', parametro1: valor_no_js1, parametro2: valor_no_js2}, //Podem ser passados quantos parametros forem necessarios...
            done : function () {
                $('.aguarde').html("caminho");  //No done, vc pode realizar uma ação enquanto agurda a resuisição, geralmente utilizada para loading
            },
            success: function (retorno) {
                $(".classe").html(retorno);  //Aqui vem o retorno, exitem outros metodos, append, load, facil de entender na documentação do jQuery
            }
        });
    }

	console.log("Iniciado..."); //Só pra testar o load do jQuery na pagina...
});