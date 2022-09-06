<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title> CRUD </title>
</head>
<body>
<?php
    include "conecta.phtml";
    $con=conecta();
    $sql="select * from persona";
    $resultado=mysqli_query($con,$sql);
    
?>
<div>
<a href="agregar.html">Nuevo</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>USUARIO</th>
                <th>EMAIL</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($filas=mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
                <td><?php echo $filas['id_person']?></td>
                <td><?php echo $filas['usuario_perso']?></td>
                <td><?php echo $filas['email_perso']?></td>
                <td>
                    <a href="editar.html">Editar</a>
                    <a href="">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>