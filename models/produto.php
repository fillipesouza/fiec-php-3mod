<?php class Produto {
    private $nome;
    private $preco;
    private $foto;
    private $id;
    private $qtdecoletiva;
    private $precocoletivo;

    public function getId(){
        return $this->id;
    }

    public function setNome($novo_nome){
        $this->nome = $novo_nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setPreco($novo_preco){
        $this->preco = $novo_preco;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function setFoto($novo_foto){
        $this->foto = $novo_foto;
    }
    public function getFoto(){
        return $this->foto;
    }
    
}
?>