<?php

$nome = $_POST["nome"];
$logradouro = $_POST["logradouro"];
$numero = $_POST["numero"];
$cep = $_POST["cep"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];

$nomeImagem = $_FILES["arq"]["name"];
$tipoImagem = $_FILES["arq"]["type"];
$dirTemporario = $_FILES["arq"]["tmp_name"];
$dirMove = "images/" . $nomeImagem; 

$tmp = $_FILES["arq"]["tmp_name"];
$arq = "./" .$_FILES["arq"]["name"];

if($tipoImagem = "image/jpeg" || $tipoImagem == "image/png") {
    if( move_uploaded_file( $tmp, $arq )){
        echo "Arquivo enviado com sucesso para o servidor!";
    }
    echo("  
            <h3>$nome</h3>
            <hr>
            <h3>Endereço:</h3>
            <div>
                <h4>Logradouro: $logradouro</h4>
                <h4>Número: $numero</h4>
                <h4>CEP: $cep</h4>
                <h4>Complemento: $complemento</h4>
                <h4>Bairro: $bairro</h4>
                <h4>Cidade: $cidade</h4>
                <h4>Estado: $estado</h4>
                
            </div>
            ");
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
    
}

?>