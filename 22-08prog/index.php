<?php

class Produto {
    public string $nome;
    public float $preco;
    public int $quantidade;

    public function __construct(string $nome, float $preco, int $quantidade = 0) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function adicionarEstoque(int $qtd): void {
        $this->quantidade += $qtd;
    }

    public function removerEstoque(int $qtd): bool {
        if ($qtd <= $this->quantidade) {
            $this->quantidade -= $qtd;
            return true;
        }
        return false;
    }

    public function calcularValorTotal(): float {
        return $this->preco * $this->quantidade;
    }
}

$produto = new Produto("Notebook", 3500.50, 10);

echo "Produto: " . $produto->nome . "\n";
echo "Estoque inicial: " . $produto->quantidade . " unidades\n";
echo "Valor total em estoque: R$ " . $produto->calcularValorTotal() . "\n\n";

$produto->adicionarEstoque(5);
echo "Após adicionar 5 unidades: " . $produto->quantidade . " unidades\n";

if ($produto->removerEstoque(3)) {
    echo "Remoção de 3 unidades realizada com sucesso!\n";
} else {
    echo "Falha ao remover estoque.\n";
}
echo "Estoque atual: " . $produto->quantidade . " unidades\n";

if ($produto->removerEstoque(20)) {
    echo "Remoção de 20 unidades realizada com sucesso!\n";
} else {
    echo "Falha ao remover 20 unidades: Estoque insuficiente!\n";
}

echo "Estoque final: " . $produto->quantidade . " unidades\n";
echo "Valor total final em estoque: R$ " . $produto->calcularValorTotal() . "\n";

?>