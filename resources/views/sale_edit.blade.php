<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Editar vendas</title>
</head>

<body>
    </div>
    <div class="container">

        <div class="row">
            @if (session()->has('messagem'))
            <div class="alert alert-success" role="alert" style="width: 100%; text-align: center;">
                {{session()->get('messagem')}}
            </div>
            @endif

            @if (session()->has('messagemErro'))
            <div class="alert alert-danger" role="alert" style="width: 100%; text-align: center;">
                {{session()->get('messagemErro')}}
            </div>
            @endif
            <div class="col">

            </div>



            <h2>Editar venda</h2>

            <form action="{{ route('sales.update', ['sale'=> $sale -> id])}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="mb-3">
                    <label for="nome" class="form-label">Valor da venda:</label>
                    <input class="form-control" type="number" step="0.01" name="sale_value" value="{{$sale->sale_value}}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Comissão:</label>

                    <input class="form-control" type="number" step="0.01" name="commission" value="{{$sale->commission}}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data da venda:</label>

                    <input class="form-control" type="date" name="sale_date" value="{{$sale->sale_date}}">
                </div>
                <div class="mb-3">
                    <label for="seller_id" class="form-label">ID do vendedor:</label>

                    <input class="form-control" type="number" name="seller_id" value="{{$sale->seller_id}}">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>

            <a href="/sellers" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    </div>
</body>

</html>