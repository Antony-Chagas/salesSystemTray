<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Editar dados do Vendedor</title>
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

        </div>

        @if (session()->has('messagemErro'))
        <div class="alert alert-danger" role="alert" style="width: 100%; text-align: center;">
            {{session()->get('messagemErro')}}
        </div>
        @endif
        <div class="col">

            <h2>Editar dados do vendedor {{$seller->name}}</h2>

            <form action="{{ route('sellers.update',['seller'=>$seller->id])}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do vendedor:</label>
                    <input class="form-control" type="text" name="name" value="{{$seller->name}}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>

                    <input class="form-control" type="text" name="email" value="{{$seller->email}}">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>

            <a href="/sellers" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    </div>
</body>

</html>