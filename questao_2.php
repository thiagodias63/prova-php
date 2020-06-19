<?php
// Função recursiva *
// Crie uma função recursiva para descobrir o menor número inteiro divisível por 2, 3 e 10
// ao mesmo tempo. Quando encontrá-lo, imprima-o na tela.

function menor_divisivel(int $valor):int
{
    if($valor % 10 == 0 && $valor % 3 == 0 && $valor % 2 == 0) {
        return $valor;
    } else {
        return menor_divisivel($valor+1);
    }
}
print_r(menor_divisivel(2));
