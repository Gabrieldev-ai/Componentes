<?php

function router(){
    echo "2. Router está analisando a URL.<br>";
    $rota = $_GET['rota'] ?? "/usuarios";
    middleware($rota);
}
