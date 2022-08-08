<div class="card">
    <div class="card-header">
    Agregar Producto     
    </div>
    <div class="card-body">
       <form action="" method="post">

       <div class="mb-3">
         <label for="nombre" class="form-label">Nombre</label>
         <input type="text"
           class="form-control" required name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del Producto">
       </div>

<div class="mb-3">
  <label for="stock" class="form-label">Stock</label>
  <input type="number" required class="form-control" name="stock" id="stock" aria-describedby="emailHelpId" placeholder="Stock">
</div>

<input name="" id="" class="btn btn-success" type="submit" value="Agregar producto">

<a href="?controlador=productos&accion=inicio" class="btn btn-primary">Cancelar</a>

       </form>

    </div>

</div>