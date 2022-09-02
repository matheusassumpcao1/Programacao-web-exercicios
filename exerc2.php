<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-U   A-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
           
    $usuario = array('nome'=>'Antônio','tipo'=>'leitor','email'=>'anv@ftek.com','login'=>'anv','senha'=>'f@tek');
?>

<table border="1px">
<?php foreach($usuario as $chave => $valor) { ?>
     <tr>
        <th><?php echo $chave; ?></th>
        <td><?php echo $valor; ?></td>
    </tr>
<?php } ?>
</table>
</body>
</html>


?>
    
</body>
</html>


