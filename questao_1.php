<?php 
// Arrays *
// Tendo os arrays ['ES', 'MG', 'RJ', 'SP'] e ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'],
// percorra os vetores dados e crie um outro com a seguinte estrutura:
// ['ES'=>'Espírito Santo', 'MG'=>'Minas Gerais', 'RJ'=>'Rio de Janeiro', 'SP'=>'São Paulo']. 
// Depois de criado terceiro vetor, leia-o e imprima em cada linha a chave de cada posição e seu respectivo valor separados por "-".

$estados = ['ES', 'MG', 'RJ', 'SP'];
$cidades = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];

function merge_cidades_estados(Array $estados, Array $cidades):String
{
    $estados_cidades = array_combine($estados, array_reverse($cidades));
    $estados_cidades_retorno = "";
    foreach($estados_cidades as $estado => $cidade)
    {
        $estados_cidades_retorno .= "{$estado} - {$cidade} \n\r";
    }
    return $estados_cidades_retorno;
}
print_r(merge_cidades_estados($estados, $cidades));
