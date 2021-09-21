    <?php 
    Class Pessoa{        
        private $nome;
        private $IDADE; 
        private $sexo; 

    public function __construct($nome, $sexo, $IDADE)
    {
        $this-> nome = $nome;
        $this-> sexo = $sexo;
        $this-> idade = $IDADE;


        print "Teste pessoa: Nome:{$nome}, Sexo:{$sexo}, Idade: {$IDADE},  <br> " ;
    }
} 

    public function getNome(){
        return $this -> nome;
    }

    public function getSexo(){
        return $this -> sexo;
    }

    public function getIdade(){
        return $this -> idade;
    }

$pessoa1 = new Pessoa('Paula', ' f ', 14);
$pessoa2 = new Pessoa('Naruto', ' m ', 20);
$pessoa3 = new Pessoa('Kakashi', ' m ', 10);
$pessoa4 = new Pessoa('Jiraya', ' m ', 250);
$pessoa5 = new Pessoa('Sor', ' m ', 30);

?>