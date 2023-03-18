<div class="form-group">
    <label for="exampleFormControlInput1">Nombre completo</label>
    <input type="text" class="form-control" name="nombre" placeholder="Joaquin" value="{{$super->nombre ?? ''}}">
  </div>
  <div class="form-group">
      <label for="exampleFormControlInput1">Apodo</label>
      <input type="text" class="form-control" name="apodo" placeholder="Mr. sawman" value="{{$super->apodo ?? ''}}">
  </div>
  <div class="form-group">
      <label for="exampleFormControlTextarea1">Adicional</label>
    <input class="form-control" name="adicional" value="{{$super->adicional ?? ''}}"  >
  </div>
  <div class="form-group">
      <label for="exampleFormControlFile1">Imagen del super</label>
      <input type="file" class="form-control-file" name="img">
  </div>
  <button type="submit" class="btn btn-primary mb-2">{{$method=='create' ? 'Registrar':'Actualizar'}}</button><br>
  <a href="{{route('sup.index')}}" class="btn btn-danger mb-2">Cancelar</a>