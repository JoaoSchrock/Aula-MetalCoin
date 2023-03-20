<?php
    require('../conn.php');

    $name_prod = $_POST['name_prod'];
    $qtd_prod = $_POST['qtd_prod'];
    $valor_prod = $_POST['valor_prod'];
    $cat_prod = $_POST['cat_prod'];
   
    if(empty($name_prod) || empty($qtd_prod) || empty($valor_prod) || empty($cat_prod)){
        echo "Os valores não podem ser vazios";
    }else{
        $cad_prod = $pdo->prepare("INSERT INTO produtos(nome_produto, qtd_produto, valor_produto, cat_produto) 
        VALUES(:name_prod, :qtd_prod, :valor_prod, :cat_prod)");
        $cad_prod->execute(array(
            ':name_prod'=> $name_prod,
            ':qtd_prod'=> $qtd_prod,
            ':valor_prod'=> $valor_prod,
             ':cat_prod'=> $cat_prod  
        ));

        echo "<script>
        alert('Cadastrado com Sucesso!');
        </script>";
    }
?>