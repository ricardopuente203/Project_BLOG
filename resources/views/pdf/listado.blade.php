@extends('layouts.pdfinicio')
@section('content')
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Apellido</th>
            <th>Avatar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($trainers as $trainer)
        <tr>
            <td>{{$trainer->id}}</td>
            <td>{{$trainer->name}}</td>
            <td>{{$trainer->Apellido}}</td>
            <td class="text-right">{{$trainer->Avatar}}</td>
        <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;"
        class="card-img-top rounded-circle mx-auto d-block" src="images/{{$trainer->Avatar}}" alt="">
        </tr>
        @endforeach
    </tbody>
</table>
@endsection