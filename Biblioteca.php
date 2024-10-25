<?php
// Classe base Livro
class Livro {
    protected $titulo;
    protected $autor;
    protected $ano;

    // Construtor
    public function __construct($titulo, $autor, $ano) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
    }

    // Método para exibir as informações básicas do livro
    public function getInfo() {
        return "Título: $this->titulo, Autor: $this->autor, Ano: $this->ano";
    }
}

// Classe LivroFisico que herda de Livro
class LivroFisico extends Livro {
    private $paginas;

    // Construtor
    public function __construct($titulo, $autor, $ano, $paginas) {
        parent::__construct($titulo, $autor, $ano);  // Inicializa os atributos da classe base
        $this->paginas = $paginas;
    }

    // Sobrescrevendo o método getInfo para incluir o número de páginas
    public function getInfo() {
        return parent::getInfo() . ", Páginas: $this->paginas";
    }
}

// Classe Ebook que herda de Livro
class Ebook extends Livro {
    private $tamanhoArquivo;

    // Construtor
    public function __construct($titulo, $autor, $ano, $tamanhoArquivo) {
        parent::__construct($titulo, $autor, $ano);  // Inicializa os atributos da classe base
        $this->tamanhoArquivo = $tamanhoArquivo;
    }

    // Sobrescrevendo o método getInfo para incluir o tamanho do arquivo
    public function getInfo() {
        return parent::getInfo() . ", Tamanho do arquivo: $this->tamanhoArquivo MB";
    }
}

// Classe Biblioteca para gerenciar os livros
class Biblioteca {
    private $livros = [];

    // Adiciona um livro à biblioteca
    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
    }

    // Lista todos os livros da biblioteca
    public function listarLivros() {
        foreach ($this->livros as $livro) {
            echo $livro->getInfo() . "\n";
        }
    }
}

// Criando alguns livros físicos e ebooks
$livroFisico1 = new LivroFisico("O Senhor dos Anéis", "J.R.R. Tolkien", 1954, 1000);
$livroFisico2 = new LivroFisico("A garota no trem", "Paula Hawkins", 2015, 497);
$livroFisico3 = new LivroFisico("Vítima: O Outro Lado do Assassinato", "Gary Kinder", 2023, 368);
$ebook1 = new Ebook("Clean Code", "Robert C. Martin", 2008, 5.0);
$ebook2 = new Ebook("A Game of Thrones", "George R.R. Martin", 1996, 8.5);
$ebook3 = new Ebook("Columbine","Dave Cullen",2019,498);

// Criando a biblioteca e adicionando os livros
$biblioteca = new Biblioteca();
$biblioteca->adicionarLivro($livroFisico1);
$biblioteca->adicionarLivro($livroFisico2);
$biblioteca->adicionarLivro($livroFisico3);
$biblioteca->adicionarLivro($ebook1);
$biblioteca->adicionarLivro($ebook2);
$biblioteca->adicionarLivro($ebook3);

// Listando todos os livros
echo "Todos os livros:\n";
$biblioteca->listarLivros();

?>
