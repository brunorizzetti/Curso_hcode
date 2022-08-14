<?php

require_once("config.php");

$_SESSION["nome"] = "Hcode";

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()) {

    case PHP_SESSION_DISABLED:
    echo "Sessões desabilitadas";
    break;

    case PHP_SESSION_NONE:
    echo "Sessões habilitadas, mas não existem";
    break;

    case PHP_SESSION_ACTIVE:
    echo "Sessões habilitadas e existem";
    break;

}

echo "<br><br>";

echo session_id();

echo "<br><br>";

var_dump($_SESSION);

unset($_SESSION['nome']); //removendo variável nome da sessão


//echo $_SESSION['nome']; // acusará erro de index indefinido


echo "<br><br>" . session_id() . "<br><br>"; // aqui existe o id da sessao

session_destroy(); //destroi a sessao

echo "<br>ID sessao após o destroy: " . session_id() . "<br><br>"; // nao existe mais um id de sessao

?>