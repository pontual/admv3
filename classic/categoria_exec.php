<?php

$crud_action = $_POST['crud_action'];

echo $crud_action;

if ($crud_action == "create") {

    $nome = $_POST['nome'];
    $detalhes = $_POST['detalhes'];

    echo "Insert $nome, $detalhes";
} elseif ($crud_action == "update") {
    echo "Update nome";
} else {
    echo "Ação desconhecida: $crud_action";
}



