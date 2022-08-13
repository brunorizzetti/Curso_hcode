<?php
$nome = "Fulano ";

function funcao1()
{

    global $nome; //agora entende-se que a variável nome de fora da função pode ser utilizado dentro da função.
    return $nome;
}

function funcao2()
{

    $nome = "Beltrano ";

    return ($nome . " agora na função 2");
}

function resumo_arrays()
{
    $carros[0][0] = "GM";
    $carros[0][1] = "Cobalt";
    $carros[0][2] = "Onix";
    $carros[0][3] = "Camaro";

    $carros[1][0] = "Ford";
    $carros[1][1] = "Fiesta";
    $carros[1][2] = "Fusion";
    $carros[1][3] = "Eco Sport";


    echo $carros[0][3].'<br>';

    echo end($carros[1]);
}

$pessoas = array();

array_push($pessoas, array(

    'nome'=>'João',
    'idade'=>20

));

array_push($pessoas, array(

    'nome'=>'Glaucio',
    'idade'=>25

));
var_dump($pessoas); //é um array de array

foreach ($pessoas as $key => $value) {
    var_dump(($value));
    foreach ($value as $dados => $valor){
        //echo($valor).'<br>';
    }

}

echo $pessoas[1]['nome'];
