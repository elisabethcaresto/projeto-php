<?php
include 'conn.php';

$sql = "SELECT * from Bandas";
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border=1>

    <thead>
    
    <th>ID</th>
    <th>Nome</th>
    <th>Data cadastro</th>
    <th></th>
    <th></th>
    </thead>
    <?php while($dados = $result->fetch_assoc()){
        $id =  $dados['id_bandas'];  
    ?>
    <tbody>


        <td><?php echo $dados['id_bandas']?></td>
        <td><?php echo $dados['Nome_bandas']?></td>
        <td><?php echo $dados['Data_cadastro']?></td>
        <td><?php echo "<a href='http://localhost/projPHP/projeto-php/excluir.php?id=$id'>Excluir</a>"; ?></td>
        <td><?php echo "<a href='http://localhost/projPHP/projeto-php/alterar.php?id=$id '>Alterar</a>"; ?></td>

    </tbody>
    <?php } ?>
</table>
</body>
</html>