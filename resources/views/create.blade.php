<x-app>
    <h1>Registra un nuevo super</h1>

    <form action="{{route('sup.store')}}" method="post" enctype="multipart/form-data">
        @csrf
       @include('form',['method'=>'create'])
      </form>
</x-app>