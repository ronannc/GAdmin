@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contas pagar - tipo 0</div>

                    <div class="panel-body">
                        <form class="form-horizontal" action="{{route('balanco.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="name">Nome</label>
                                    <input id="name" type="text" class="form-control" name="name" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="valor">Valor</label>
                                    <input id="valor" type="text" class="form-control" name="valor" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
