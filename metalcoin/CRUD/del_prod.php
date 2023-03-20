<?php

    require("../conn.php");
    $delete_prod = $pdo->prepare("delete from produtos where id_produtos = 1;");
    $delete_prod->execute();

?>