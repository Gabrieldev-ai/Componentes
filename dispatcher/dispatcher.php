<?php

function dispatcher($rota){
    echo "5. Dispatcher decidiu qual controller deve executar.<br>";

    switch ($rota) {
        case "/usuarios":
            usuarioController();
            break;
        case "/fazendas":
            fazendaController();
            break;
        default:
            echo "Rota não encontrada.<br>";
    }
}