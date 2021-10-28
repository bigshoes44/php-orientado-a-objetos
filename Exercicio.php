<?php

class venda
{
    private $produtos;
    private $data;
    private $quatidade;
    private $valortotal;

    public function __construct($produtos, $data, $quantidade,
    $valortotal )
    {
        $this->produtos=$produtos;
        $this->data=$data;
        $this->quantidade=$quantidade;
        $this->valortotal=$valortotal;
        
    }
    public function dadosdavenda()
    {
        return $this->produtos;
    }

    
}

$venda = new venda (
    'Sabão em pó', //produtos
    '28/10/2021', //data
    '5', //quantidade
    10.00//valortotal
);

var_dump($venda->dadosdavenda());



