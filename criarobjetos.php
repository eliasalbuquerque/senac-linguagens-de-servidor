<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Produto {
    public $valor;
    public $nome;

    public function __construct() {
        
        $this->valor = 12345;
        $this->nome = "Aula 08";
    }
}

$produto = new Produto();
?>

<h2>Instancia de nome:</h2>
<p><?php echo ($produto->nome);?></p>

<h2>Instancia de valor:</h2>
<p><?php echo ($produto->valor);?></p>

</body>
</html>