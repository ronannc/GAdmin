@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">CAIXA SEM TAMPA</div>

                    <div class="panel-body">
                        <form class="form-horizontal" action="#" method="get">

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="name">Valor chapa</label>
                                    <input id="vChapa" type="text" class="form-control" name="vChapa" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="name">Comprimento</label>
                                    <input id="comp" type="text" class="form-control" name="comp" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="name">Largura</label>
                                    <input id="larg" type="text" class="form-control" name="larg" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="name">Altura</label>
                                    <input id="alt" type="text" class="form-control" name="alt" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary" onclick="calc()">
                                        Calcular
                                    </button>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <p class="font-italic" name="custo" id="custo">Custo: </p>
                                    <p class="font-italic" name="total" id="total">Total: </p>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function calc(){
            var x = parseFloat(document.getElementById('vChapa').value) + parseFloat(document.getElementById('alt').value) + parseFloat(document.getElementById('comp').value) + parseFloat(document.getElementById('larg').value);
            document.getElementById('custo').innerHTML = "Custo: " + x;
            document.getElementById('total').innerHTML = "Total: " + parseFloat(x) * 5;
        }
    </script>
@endsection
