<form action="{{url('/empleado')}}" method=post enctype="multipart/form-data">
@csrf
<div class="mb-3">
    <h1>Formulario de creacion de empleado</h1>
  <label for="" class="form-label">Nombre</label>
  <input type="text"
    class="form-control" name="Nombre" id="" aria-describedby="helpId" placeholder="Nombre">
  <small id="helpId" class="form-text text-muted"></small>
</div>
<label for="" class="form-label">Apellido Paterno</label>
  <input type="text"
    class="form-control" name="Apellido Paterno" id="" aria-describedby="helpId" placeholder="Apellido Paterno">
  <small id="helpId" class="form-text text-muted"></small>
  <div>
  <label for="" class="form-label">Apellido Materno</label>
  <input type="text"
    class="form-control" name="Apellido Materno" id="" aria-describedby="helpId" placeholder="Apellido Materno">
  <small id="helpId" class="form-text text-muted"></small></div>
  <div>
  <label for="" class="form-label">Email</label>
  <input type="text"
    class="form-control" name="Email" id="" aria-describedby="helpId" placeholder="Email">
  <small id="helpId" class="form-text text-muted"></small> </div>
   <div class="mb-3">
     <label for="" class="form-label">Foto</label>
     <input type="file" class="form-control" name="Foto" id="" placeholder="Foto" aria-describedby="fileHelpId">
     <div id="fileHelpId" class="form-text">Help text</div>
   </div>
   <button type="Enviar" class="btn btn-primary">Enviar</button>
</form>
