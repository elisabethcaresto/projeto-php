<?php
include 'conn.php';

$id = $_GET['id'];
$sql = "SELECT Nome_bandas from Bandas where id_bandas = $id";
$result = $conn->query($sql);
$dados = $result->fetch_assoc();
$nome = $dados['Nome_bandas'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="">
    <label for="">Nome da banda</label><br>
    <input type="text" name="banda" value="<?php echo $nome;?>" >
    </form>
</body>
</html>