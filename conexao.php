<?php
$hostname ="localhost";
$bancodedados ="tabela_branco";
$usuario = "usuario";
$senha = "";

$mysqli = new mysqli($hostname, $usuario,$senha,$bancodedados);
if($mysqli->connect_errno){
echo "Falha ao conectar :(".$mysqli->conect_errno.") ".$mysqli->connect_error;
}