<x-app>
    <ul class="list-group">
        <li class="list-group-item">Datos del super heroe</li>
        <li class="list-group-item">Nombre: {{$sup->nombre}}</li>
        <li class="list-group-item">Apodo: {{$sup->apodo}}</li>
        <li class="list-group-item">Adicional: {{$sup->adicional}}</li>
        <li class="list-group-item">Foto: <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Spider-Man.jpg/1200px-Spider-Man.jpg" alt="" width="100"></li>
      </ul>
</x-app>