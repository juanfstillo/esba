<div class="card">
    <div class="card-header">
Productos
<a name="" id="" class="btn btn-success" href="?controlador=productos&accion=crear" role="button">Agregar Producto</a>

    </div>
    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($productos as $producto){?>

        <tr>
            <td><?= $producto->id;?></td>
            <td><?= $producto->nombre;?></td>
            <td><?= $producto->stock;?></td>
            <td>
            <div class="btn-group" role="group" aria-label="">
                <a href="?controlador=productos&accion=editar&id=<?= $producto->id;?>" class="btn btn-secondary">Editar</a>
                <a href="?controlador=productos&accion=borrar&id=<?= $producto->id;?>" class="btn btn-danger">Borrar</a>
            </div>    
            
            </td>

        </tr>
<?php }?>
        
    </tbody>
</table>

        
    </div>
    
</div>

