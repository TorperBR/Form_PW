<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <form action="processa2.php" method="post" enctype="multipart/form-data">

     <h1> Coloque suas informações </h1>
        <div>
         <label> Nome Completo: </label>
         <input type="text" name="nome" id="nome">

        </div> 
        <br>
        <div>
         <label> Endereço: </label>
         <input type="name" name="logradouro" id="logradouro">
        
        </div> 
        <br>
        <div>
         <label> Número: </label>
         <input type="number" name="numero" id="numero">
      
        </div>
        <br>
        <div>
         <label> CEP: </label>
         <input type="number" name="cep" id="cep">
      
        </div>
        <br>
        <div>
         <label> Complemento: </label>
         <input type="name" name="complemento" id="complemento">
<br>
        </div>
        <br>
        <div>
         <label> Bairro: </label>
         <input type="name" name="bairro" id="bairro">
       
        </div>
        <br>
        <div>
         <label> Cidade: </label>
         <input type="name" name="cidade" id="cidade">
       
        </div>
        <br>
        <div>
         <label> Estado: </label>
         <input type="name" name="estado" id="estado">
         <hr>
         
  <form action="processa2.php" method="post" enctype="multipart/form-data">
      <div>
        <label>Upload de Imagem: </label>
         <input type="file" name="arq"/>

       </div>
       <div>
         <input type="submit" value="enviar"/>   
       </div>
    </form>

</body>
</html>