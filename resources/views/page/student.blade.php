@extends('template/main')

@section('content')

    @foreach ($student as $item)
    
        <div class="card d-flex" style="width: 18rem;" >
            <img src=" {{asset('img/geek.webp')}} " class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$item->name}} {{$item->prenom}}</h5>
            <h5 class="card-title">{{$item->age}}</h5>
            </div>
        </div>

    @endforeach


    
@endsection