<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Vendedores</title>
</head>

<body>
    <h2>Lista de vendedores</h2>

    @if (session()->has('messagemEmail'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session()->get('messagemEmail')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session()->has('messagemEmailErro'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session()->get('messagemEmailErro')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        @endif

    </div>



    <div class="continer">

    </div>
    <a href="{{ route('sellers.create') }}" class='btn btn-primary'> Incluir novo vendedor </a>
    <a href="{{ route('sale.send-email') }}" class='btn btn-info'> Enviar E-mail</a> <br><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID Vendedor</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($sellers as $seller)
            <tr>
                <th>{{$seller->id}}</th>
                <td>{{$seller->name}}</td>
                <td>{{$seller->email}}</td>
                <td>
                    <a href="{{ route('sales.index', ['sellerID'=>$seller->id,'sellerName'=>$seller->name,'sellerEmail'=>$seller->email ])}}" class='btn btn-primary'> Acessar </a>

                    <a href="{{ route('sellers.edit',['seller'=>$seller->id])}}" class='btn btn-success'> Editar </a>

                    <a href="{{ route('sellers.show', ['seller'=>$seller->id])}}" class='btn btn-danger'> Excluir </a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/" class="btn btn-primary">Voltar tela inicial</a>

</html>