@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">BALANÇO</div>

                    <div class="panel-body">
                        <table class="table table-striped">

                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOME</th>
                                <th scope="col">VALOR</th>
                                <th scope="col">TIPO</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dados as $dado)
                                <tr>
                                    <th scope="row">{{$dado->id}}</th>
                                    <td>{{$dado->name}}</td>
                                    <td>{{$dado->valor}}</td>
                                    <td>{{$dado->tipo}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                            <p><h3></h3></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



