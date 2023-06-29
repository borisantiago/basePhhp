<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    require_once('../controllers/PlataformaController.php');
    

    $plataformaLista = listaPlataforma();
    if(count($plataformaLista) > 0){
    
?>
<table class="table">
    <thead>
        <th>id</th>
        <th>nombre</th>
        <th>aaa</th>
    <thead>
    <tbody>
        <?php
            foreach($plataformaLista as $plataforma){
        ?>
        <tr>
            <td><?php echo $plataforma -> getIdPlataforma(); ?></td>
            <td><?php echo $plataforma -> getNombre(); ?></td>
            <td>
                <div class="btn-group" role="group" arial-label="Basic example">
                    <a class="btn btn-success" href="edit.php?id=<?php echo $plataforma->getIdPlataforma();?>">Editar</a>
                    
                    <<form name="delete_plataforma" action="delete.php" method="POST" style="...">
                    <input type="hidden" name="plataformaId" value="<?php echo $plataforma->getIdePataforma();?>" />
                    <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </div>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table >

<?php 
    } else {
?>

<div class="alert alert-warning" role="alert">
    Aún no existen plataformas
</div>

<?php
    }
?>

    
</body>
</html>