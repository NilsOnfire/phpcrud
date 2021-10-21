<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'conexion.php';
    $query = $db->query('SELECT * FROM expenses');
    

    ?>
    <div>

<a href="agregar"> Nuevo</a>

<table class="table" width="940px">
<!-- 
<thead>
    <tr class="col-8">
 
    <td>ID</td>
    <td>TITLE</td>
    <!-- <td>CATEGORY</td> -->
    <!-- <td>AMOUNT</td>
    <td>DATE</td>
    <!-- <td>ID DEL USUARIO</td> -->
<!-- </tr> -->
<!-- </thead> --> --> -->
<tbody>
    <?php
    while ($filas = mysqli_fetch_assoc($query)){
        ?>
        <tr class="col-8" bg-primary height="100px" >

        <td width="10px"><?php echo $filas['id']?></td>
        <td><?php echo $filas['title']?></td>
        <td><?php echo $filas['category_id']?></td>
        <td><?php echo $filas['amount']?></td>
        <td><?php echo $filas['date']?></td>
        <td><?php echo $filas['id_user']?></td>
        <td>
            <a href="">editar</a>
            <a href="">eliminar</a>
        </td>
        
        </tr>
      
    
   <?php }?>





</tbody>
</table>

    </div>








</body>
</html>