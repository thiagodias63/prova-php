<?php
// Lógica de programação *
// Pensando em todos os números naturais inferiores a 10 que são múltiplos de 3 ou 5,
// temos 3, 5, 6 e 9. Somando esses múltiplos obtemos o valor 23. Utilize um algorítimo
// para calcular a soma de todos os múltiplos de 3 ou 5 abaixo de 1000
function somar_multiplos():int {
    $disco = [];
    for($valor = 3; $valor < 1000; $valor++)
    {
        if ($valor % 3 == 0 || $valor % 5 == 0) {
            array_push($disco, $valor);
        }
    }
    return array_sum($disco);
}

print_r(somar_multiplos());