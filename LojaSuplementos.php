<?php
// Classe Produto
class Produto {
    private $nome;
    private $preco;
    private $quantidade;

    // Construtor para inicializar os atributos
    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    // Método para exibir informações do produto
    public function getInfo() {
        return "Produto: $this->nome, Preço: R$ " . number_format($this->preco, 2, ',', '.') . ", Quantidade: $this->quantidade";
    }

    // Método para calcular o valor total do produto no estoque
    public function calcularValorTotal() {
        return $this->preco * $this->quantidade;
    }
}

// Classe Loja
class Loja {
    private $produtos = []; // Array de produtos

    // Método para adicionar produtos à loja
    public function adicionarProduto(Produto $produto) {
        $this->produtos[] = $produto;
    }

    // Método para calcular o valor total do estoque
    public function calcularValorEstoque() {
        $valorTotal = 0;
        foreach ($this->produtos as $produto) {
            $valorTotal += $produto->calcularValorTotal();
        }
        return $valorTotal;
    }

    // Método para listar todos os produtos da loja
    public function listarProdutos() {
        foreach ($this->produtos as $produto) {
            echo $produto->getInfo() . "\n";
        }
    }
}

// Criando produtos
$produto1 = new Produto("Creatina", 69.90, 50);
$produto2 = new Produto("Omega3", 99.99, 120);
$produto3 = new Produto("Whey", 109.90, 50);

// Criando a loja e adicionando os produtos
$loja = new Loja();
$loja->adicionarProduto($produto1);
$loja->adicionarProduto($produto2);
$loja->adicionarProduto($produto3);

// Listando os produtos da loja
echo "Lista de Produtos:\n";
$loja->listarProdutos();

// Calculando o valor total do estoque
echo "\nValor total em estoque: R$ " . number_format($loja->calcularValorEstoque(), 2, ',', '.') . "\n";
?>
