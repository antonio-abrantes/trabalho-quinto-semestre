<?php

class pedidosController extends controller {


	public function __construct() {
      parent::__construct();

		if(!isset($_SESSION['cLogin'])){

			header("Location: /marmitas/login");

		}
	}

	

	public function index(){

		$dados = array();
		$pedidos = new pedidos();
		$produtos = $pedidos->listarProdutos();
		
		$dados['produtos']=$produtos;
			
		

		if(isset($_POST['produto']) && isset($_POST['tamanho']) && isset($_POST['quantidade'])){

				$produto = array();
				$quantidade  = array();
				$tamanho = array();

				$produto = $_POST['produto'];
				$quantidade  = $_POST['quantidade'];
				$tamanho = $_POST['tamanho'];
				

			for($i = 0; $i < count($produto) ; $i++){

				$dados[$i] = array(
					'produto'=>$produto[$i],
					'quantidade'=> $quantidade[$i],
					'tamanho'=>$tamanho[$i]
					);
    			

    			
			}

			foreach($dados as $lista){
					
					
    				$pedido= '1';
    				$sql = $this->db->prepare("INSERT INTO item_pedido SET id_pedido =:id_pedido, nomeproduto=:produto,quantidade=:quantidade, tamanho=:tamanho");
			        $sql->bindValue(":id_pedido" ,$pedido);
			        $sql->bindValue(":produto" , $lista['produto']);
			        $sql->bindValue(":quantidade" ,$lista['quantidade']);
			        $sql->bindValue(":tamanho" ,  $lista['tamanho']);
			        $sql->execute();

    				
    			}


			
		}

		

		$this->loadTemplate('pedidos', $dados);



	}


	public function cadastrar(){
		$dados = array('texto'=>'');
		
		$pedidos = new pedidos();
		$produtos = $pedidos->listarProdutos();
		
		$dados['produtos']=$produtos;
			

	                	

           $this->loadTemplate('cadastrarpedidos', $dados);
        
				 
            }

}
        
?>

