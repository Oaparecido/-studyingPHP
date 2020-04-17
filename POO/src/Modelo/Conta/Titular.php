<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private $endereco;
    private static $numeroContasTitular = 0;
    private static $taxaOperacao;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;

        self::$numeroContasTitular++;

        try {
            if(self::$numeroContasTitular < 1){
                throw new \Exception("Nao é possivel realizar divisao por 0");
            }
            self::$taxaOperacao = (30/self::$numeroContasTitular);
        }catch (\Exception $erro) {
            echo $erro->getMessage();
            exit;
        }
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function recuperaNumeroContas(): int
    {
        return self::$numeroContasTitular;
    }

    public function recuperaTaxa(): float
    {
        return self::$taxaOperacao;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
