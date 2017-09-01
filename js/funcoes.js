$(function () {

	//Atualiza os campos para os valores iniciais
	atualizaValores();

	/*
	*
	* Cada select ao ser povoado pelo PHP, o seu atributo value rece o preço do do produco que preenche o campo
	* Quando um select é selecionado, o campo com a classe preco referente a seu bloco é atualizado
	* **/
    $('.selecionar').on("change", function(){
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
    $(".quantidade").change(function () {
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

	//console.log("Iniciado...");
});