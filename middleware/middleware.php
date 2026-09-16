<?php 
function middlewere($rota){
echo "3. Middeware esta verificando a requisição.<br>";
$permitido = true;

if ($permitido) {

echo "4. Middeware permitiu continuar.<br>";
dispatcher($rota);
} else{
    echo "4. Middeware bloqueou a requisição.<br>"
}
}