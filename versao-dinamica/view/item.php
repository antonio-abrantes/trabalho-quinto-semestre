
<?php

    require_once('../inc/config_bd.php');
    //OU include_once('../inc/config_bd.php');

    $sql = new Sql();
    $produtos = $sql->select("SELECT * FROM produto");

/* `bd_marmitas`.`produto` */
//    $produto02 = array(
//        array('id' => '1', 'produto' => 'Marmita de frango', 'tamanho' => 'P', 'valor' => '19.90'),
//        array('id' => '2', 'produto' => 'Marmita de frango', 'tamanho' => 'M', 'valor' => '23.90'),
//        array('id' => '3', 'produto' => 'Marmita de frango', 'tamanho' => 'G', 'valor' => '26.90'),
//        array('id' => '4', 'produto' => 'Marmita de carne de gado', 'tamanho' => 'P', 'valor' => '20.90'),
//        array('id' => '5', 'produto' => 'Marmita de carne de gado', 'tamanho' => 'M', 'valor' => '24.90'),
//        array('id' => '6', 'produto' => 'Marmita de carne de gado', 'tamanho' => 'G', 'valor' => '28.90')
//    );


    $tamanhos = [
        1 => "P",
        2 => "M",
        3 => "G"
    ];

?>

    <tr class='produto'>
        <td>
            <label class='btn btn-primary indice' for='indice' name='indice'>1</label>
        </td>
        <td>
            <div class="product">
                <select class="selecionar" style="border-radius: 5px 5px 5px 5px; height: 32px; margin-top: 1px">
                    <option style="display: none" value=''>Escolha o produto</option>
                    <?php
                    foreach ($produtos as $key => $linha){

                        echo "<option class='item-option' id='" . $linha["id"] . "' data-tamanho='".$linha["tamanho"]."' value='".$linha["valor"]."'>" . $linha["produto"] . " - ".$linha["tamanho"]. "</option>\n";
                    }
                    ?>
                </select>
            </div>
        </td>
        <td>
            <input class="quantidade" type='number' style='width: 50px; margin-top: 1px; height: 32px' max='10' min='0' value="0">
        </td>
        <td>
            <select class='form-control tamanho' name='tamanho' id='tamanho' style='width: 60px;'>
                <?php
                foreach ($tamanhos as $key => $tamanho) {
                    echo "<option id='" . $key . "' value=''>" . $tamanho . "</option>";
                }
                ?>
            </select>
        </td>
        <td>
           <!-- <input class='form-control' type='text' name='valor' id='valor1' value="0.0" readonly style='width: 70px;'/> -->
            <div style='font-size: 18px; margin-top: 5px; text-align: left'>R$  <span class='preco'>0.0</span></div>
        </td>
        <td>
            <!-- <button type='button' class='btn btn-default add'>ADICIONAR</button> -->
            <button type='button' class='btn btn-danger remove' onclick='remover(this)'>REMOVER</button>
        </td>
    </tr>

<?php


/* `bd_marmitas`.`produto`

?>

<script>

    //JSON de exemplo
    var produtos = [
        {"type": "header", "version": "4.7.0", "comment": "Export to JSON plugin for PHPMyAdmin"},
        {"type": "database", "name": "bd_marmitas"},
        {
            "type": "table", "name": "produto", "database": "bd_marmitas", "data": [
            {"id": "1", "produto": "Marmita de frango", "tamanho": "P", "valor": "19.90"},
            {"id": "2", "produto": "Marmita de frango", "tamanho": "M", "valor": "23.90"},
            {"id": "3", "produto": "Marmita de frango", "tamanho": "G", "valor": "26.90"},
            {"id": "4", "produto": "Marmita de carne de gado", "tamanho": "P", "valor": "20.90"},
            {"id": "5", "produto": "Marmita de carne de gado", "tamanho": "M", "valor": "24.90"},
            {"id": "6", "produto": "Marmita de carne de gado", "tamanho": "G", "valor": "28.90"}
        ]
        }
    ]

</script> */ ?>