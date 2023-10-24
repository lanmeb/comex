<?php
 namespace Elani\Comex;
 
 class Cliente{
     private string $nome;
     private string $email;
     private string $celular;
     private string $endereco;
     private float $totalCompras;
     
     
     public function __construct(string $nome, string $email, string $celular, string $endereco, float $totalCompras) {
         $this->nome = $nome;
         if(validarEmail($email)){
            $this->email = $email;
         } else {
            echo "\n\n Email inválido" . PHP_EOL;
         }
         if(validarTelefone($celular)){
            $this->celular = $celular;
         } else {
            echo "\n\nTelefone inválido \n\n ". PHP_EOL;
         }
         $this->endereco = $endereco;
         $this->totalCompras = $totalCompras;
     }
 
     public function getNome(): string {
        return $this->nome;
     }
     public function getEmail(): string {
        return $this->email;
     }
      public function getCelular(): string {
        return $this->celular;
     }
      public function getEndereco(): string {
        return $this->endereco;
     }
    public function getTotalCompras(): float {
        return $this->totalCompras;
     }
    public function setNome(string $nome): void {
        $this->nome = $nome;
     }
    public function setEmail(string $email): void {
        $this->email = $email;
     }
    public function setCelular(string $celular): void {
        $this->celular = $celular;
     }
    public function setEndereco(string $endereco): void {
        $this->endereco = $endereco;
     }
    public function setTotalCompras(float $totalCompras): void {
        $this->totalCompras = $totalCompras;
     }
 
 }
 
  // Função para validar o email usando regex
    function validarEmail($email) {
        $padrao_email = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        if (preg_match($padrao_email, $email)) {
            //echo "$email é um endereço de e-mail válido". PHP_EOL;
            return true;
        } else {
            // echo "$email não é um endereço de e-mail válido". PHP_EOL;
            return false;
     }
 }
    //Função para validar telefone com regex
    function validarTelefone($telefone) {
        $padrao_telefone = "/^\(\d{2}\) \d{5}-\d{4}$/";
        if (preg_match($padrao_telefone, $telefone)) {
            //echo "$telefone é um número de telefone válido". PHP_EOL;
            return true;
        } else {
            // echo "$telefone não é um número de telefone válido" . PHP_EOL;
            return false;
     }
 }
     
 $cliente = new Cliente("Elania", "email@email.com", "(11) 98765-9489", "Rua das Flores", 100.00);
 
 echo "Nome: " . $cliente->getNome() . "\n". PHP_EOL;
 echo "Email: " . $cliente->getEmail() . "\n". PHP_EOL;
 echo "Telefone: " . $cliente->getCelular() . "\n". PHP_EOL;
 echo "Endereço: " . $cliente->getEndereco() . "\n". PHP_EOL;
 echo "Total Compras R$: " . $cliente->getTotalCompras() . "\n". PHP_EOL;