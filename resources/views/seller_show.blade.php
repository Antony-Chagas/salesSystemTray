<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Excluir vendedor</title>
</head>

<body>

    <h2>Excluir vendedor</h2>



    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">ID vendedor</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{$seller->id}}</th>
                <th>{{$seller->name}}</th>
                <th>{{$seller->email}}</th>
            </tr>
        </tbody>
    </table>

    <div class="alert alert-warning" role="alert" style="width: 20%; text-align: center">
        Confirme se é esse vendedor
    </div>


    <form action="{{ route('sellers.destroy', ['seller'=> $seller->id])}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>

</body>

</html>