<?php

function fazendaController(){
    echo "6. Controller recebeu a requisição.<br>";
    $fazendas = fazendaService();
    echo "8. Controller recebeu os dados do Service.<br>";
    echo "Fazendas encontradas:<br>";
    foreach ($fazendas as $fazenda) {
        echo "- " . $fazenda . "<br>";
    }
}