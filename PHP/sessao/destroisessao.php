<?php
//iniciando ou recuperando a sessao
session_start();

//apaga as variaveis da sessao
$_SESSION = array();

//destroi a sessao
session_destroy();

?>