<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$enderecoVinicius = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $enderecoVinicius);

$enderecoDaniel = new Endereco('Itaqua', 'bairro qualquer', 'outra rua', '17A');
$Daniel = new Titular(new CPF('123.456.789-11'), 'Daniel Aparecido', $enderecoDaniel);
$Daniel = new Titular(new CPF('123.456.789-11'), 'Daniel Aparecido', $enderecoDaniel);
$Daniel = new Titular(new CPF('123.456.789-11'), 'Daniel Aparecido', $enderecoDaniel);
$Daniel = new Titular(new CPF('123.456.789-11'), 'Daniel Aparecido', $enderecoDaniel);
$Daniel = new Titular(new CPF('123.456.789-11'), 'Daniel Aparecido', $enderecoDaniel);
$Daniel = new Titular(new CPF('123.456.789-11'), 'Daniel Aparecido', $enderecoDaniel);

echo "Total de contas: " . Titular::recuperaNumeroContas() . PHP_EOL;
echo "Total de taxa: " .  Titular::recuperaTaxa() . PHP_EOL;
