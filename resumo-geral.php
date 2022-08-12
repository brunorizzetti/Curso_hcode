<?php

//configuração para mostrar todo conteúdo da variavél $ler
ini_set("xdebug.var_display_max_children", -1);
ini_set("xdebug.var_display_max_data", -1);
ini_set("xdebug.var_display_max_depth", -1);

$nome = "Hcode"; //string
$site = "www.hcode.com.br"; //string
$ano = 1990; //int
$salario = 5500.99; //float
$bloqueado = false; //bool

//criação de array
$frutas = array("abacaxi", "laranja", "manga"); //array

//criando array associativo
$carros=[
    'mustang' => 'vermelho',
    'camaro' => 'amarelo',
    'uno' => 'prata',
];
echo "<pre>";
print_r ($carros);
echo "</pre>";

$data = new DateTime();
var_dump($data);
var_dump($data->format('d-m-Y'));
var_dump(($data->getTimezone())->getName());

// Meu arquivo
$arquivo = 'arquivo.txt';

// Cria o recurso (abrir o arquivo)
$handle = fopen( $arquivo, 'r' ); //$handle é um resource

// Lê o arquivo (se existir) 
$ler = fread( $handle, filesize($arquivo) );

// Fecha o arquivo
fclose($handle);

// Mostra dados na tela
var_dump($ler);

$nulo = NULL;
$vazio = "";
if (isset($_GET["a"]) && isset($_GET["b"])){
//pegando variaveis via GET e fazendo CAST
$nome = (int)$_GET["a"] . (int)$_GET["b"]; //pelo navegador pode passar da seguinte forma http://localhost/Curso_hcode/exemplo1.php?a=123&b=456

var_dump($nome);
}
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

var_dump($_SERVER);



/*require produz um erro E_COMPILE_ERROR , o que encerra a execução do script em caso de erro no arquivo, adicionando once evita que o mesmo arquivo seja carregado 2 vezes. O include só deve ser utilizado quando configurado uma path no sistema com conjunto de bibliotecas, do contrário melhor utilizar o require_once */
require_once "arquivo2.php";
 
echo (funcao1()."<br>");
echo (funcao2()."<br>");


$a = NULL;
$b = 8;
$c = 10;

echo $a ?? $b ?? $c; //mostra o b, irá mostrar o primeiro não nulo (neste caso o número 8).

//spaceship
$d = 50;
$e = 35;

var_dump($d <=> $e); //retorna 1 se o primeiro valor for maior, 0 se forem igual e -1 se o segundo valor for o maior.


$empresa = "hcode";

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo "$empresa<br>";
echo (ucfirst($empresa));

$frase = "A repetição é mãe da retenção.";
$palavra = "mãe";

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);


//alterar Treinamentos para Cursos
$name = 'Hcode Treinamentos'; 
echo "$name<br>";

$replace = 'Cursos';


$new_name = substr($name,0, strpos($name,'T')) . $replace;
echo "$new_name<br>";


/*exemplo como percorrer valores de um array associativo com foreach*/
var_dump($_POST)
?>
<form method="POST">

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">

</form>

<?php

if (isset($_POST)) {

    foreach ($_POST as $key => $value) {

        echo "Nome do campo: " . $key . "<br>";

        echo "Valor do campo: " . $value;

        echo "<hr>";

    }

}
