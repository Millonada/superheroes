<x-app>
    <a href="{{route('sup.create')}}" class="btn btn-success">Agregar</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre real</th>
            <th scope="col">Apodo</th>
            <th scope="col">Mas informacion</th>
            <th scope="col">Imagen</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($supers as $super)
            <tr>
                <th scope="row">{{$super->id}}</th>
                <td>{{$super->nombre}}</td>
                <td>{{$super->apodo}}</td>
                <td>{{$super->adicional}}</td>
                <td><img src="{{asset($super->img)}}" alt=""></td>
                <td><a href="{{route('sup.edit',$super->id)}}"><i class="fa-solid fa-pen-to-square"></i></a> | <a href="{{route('sup.del',$super->id)}}"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
              </tr>
            @endforeach
         
     
        </tbody>
      </table>
</x-app>