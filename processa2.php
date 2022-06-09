
<?php

$nome =  $_REQUEST["nome"]; 
$logradouro = $_REQUEST["logradouro"];
$numero =  $_REQUEST["numero"];
$cep =  $_REQUEST["cep"];
$complemento =  $_REQUEST["complemento"];
$bairro =  $_REQUEST["bairro"];
$cidade =  $_REQUEST["cidade"];
$estado =  $_REQUEST["estado"];

$nomeImagem = $_FILES["arq"]["name"];
$tipoImagem = $_FILES["arq"]["type"];
$dirTemporario = $_FILES["arq"]["tmp_name"];
$dirMove = "images/" . $nomeImagem; 

if($tipoImagem = "image/jpeg" || $tipoImagem == "image/png") {
}

if( empty($nome)){
     echo "CAMPO OBRIGATÓRIO!!!";
     header("Location: FormularioProva.php?erro=nome");
}
elseif( empty($logradouro)){
    echo "CAMPO OBRIGATÓRIO!!!";
    header("Location: FormularioProva.php?erro=logradouro");
}

elseif( empty($numero)){
    echo "CAMPO OBRIGATÓRIO!!!";
    header("Location: FormularioProva.php?erro=numero");
}
elseif( empty($cep)){
    echo "CAMPO OBRIGATÓRIO!!!";
    header("Location: FormularioProva.php?erro=cep");
}
elseif( empty($bairro)){
    echo "CAMPO OBRIGATÓRIO!!!";
    header("Location: FormularioProva.php?erro=bairro");
}
elseif( empty($cidade)){
    echo "CAMPO OBRIGATÓRIO!!!";
    header("Location: FormularioProva.php?erro=cidade");
}
elseif( empty($estado)){
    echo "CAMPO OBRIGATÓRIO!!!";
    header("Location: FormularioProva.php?erro=estado");
}else{
         echo "<html>
    <body>

        Bem vindo <?php echo $_POST["nome"]; ?><br>
        Logradouro: <?php echo $_POST["logradouro"]; ?><br>
        Numero: <?php echo $_POST["numero"]; ?><br>
        CEP <?php echo $_POST["cep"]; ?><br>
        Complemento: <?php echo $_POST["complemento"]; ?><br>
        Bairro: <?php echo $_POST["bairro"]; ?><br>
        Cidade: <?php echo $_POST["cidade"]; ?><br>
        Estado: <?php echo $_POST["estado"]; ?><br>
        Imagem: <?php echo $_FILES["arq"]; ?><br>

    </body>
    </html>"
}



?>