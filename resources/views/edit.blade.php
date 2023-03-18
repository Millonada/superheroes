<x-app>
    <h1>Editar super</h1>

    <form action="{{route('sup.update',$super->id)}}" method="get" enctype="multipart/form-data">
        @csrf
       @include('form',['method'=>'update'])
      </form>
</x-app>