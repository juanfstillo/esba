<div class="card">
    <div class="card-header">
    Editar Producto     
    </div>
    <div class="card-body">
       <form action="" method="post">

       <div class="mb-3">
         <label for="" class="form-label">ID:</label>
         <input readonly type="text"
           class="form-control" value=<?= $producto->id; ?> name="id" id="" aria-describedby="helpId" placeholder="ID producto">
       </div>
       
       <div class="mb-3">
         <label  for="nombre" class="form-label">Nombre</label>
         <input requiredtype="text"
           class="form-control" value=<?= $producto->nombre; ?> name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del Producto">
       </div>

<div class="mb-3">
  <label for="correo" class="form-label">Stock</label>
  <input required type="text" class="form-control" value=<?= $producto->stock; ?> name="stock" id="stock" aria-describedby="emailHelpId" placeholder="Stock">
</div>

<input name="" id="" class="btn btn-success" type="submit" value="Editar producto">
<a href="?controlador=productos&accion=inicio" class="btn btn-primary">Cancelar</a>

       </form>

    </div>

</div>