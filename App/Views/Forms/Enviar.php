<?php

namespace App\Views\Forms;

$nome = $_POST['nome'];
$para = $_POST['email'];
$mensagem = $_POST['mensagem'];

$headers = "Conten-Type: text/html; charset=UTF-8\n";
$headers.= "From: miilleramaral@gmail.com";

mail($para,"Contato",$mensagem,$headers);
header("location:/");