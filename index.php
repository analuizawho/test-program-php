<?php

$estoque = [
    'elan sc100' => 15,
    'elan g1' => 5,
    'patch cord' => 80,
    'matriz de vídeo' => 15
];

$visitas = [
    [
        'matriz de vídeo' => 1,
        'patch cord' => 5,
    ],

    [
        'elan g1' => 1,
        'patch cord' => 10,
    ]
];

function printChaveValor($array)
{
    foreach ($array as $key => $value) {
        echo $key . ": " . $value . PHP_EOL;
    }
}

echo "caramba tivemos duas visitas hoje, será que foi usado algum material nelas?" . PHP_EOL . PHP_EOL;
echo "---- Informação De Visitas ----" . PHP_EOL;
echo "Visita 1: " . PHP_EOL;
echo printChaveValor($visitas[0]) . PHP_EOL;
echo "Visita 2: " . PHP_EOL;
echo printChaveValor($visitas[1]) . PHP_EOL;


function abaterEstoque($visitas, $estoque)
{
    foreach ($visitas as $key => $value) {
        if (isset($estoque[$key])) {
            $estoque[$key] -= $value;
        }
    }
}

abaterEstoque($visitas, $estoque);
echo "--- Atualização De Estoque ---" . PHP_EOL;
print_r($estoque);
echo printChaveValor($estoque) . PHP_EOL;