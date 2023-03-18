<x-app>
    <ul class="list-group">
        <li class="list-group-item">Datos del super heroe</li>
        <li class="list-group-item">Nombre: {{$sup->nombre}}</li>
        <li class="list-group-item">Apodo: {{$sup->apodo}}</li>
        <li class="list-group-item">Adicional: {{$sup->adicional}}</li>
        <li class="list-group-item">Foto: <img src="{{$sup->img}}" alt="" width="100"></li>
      </ul>
</x-app>