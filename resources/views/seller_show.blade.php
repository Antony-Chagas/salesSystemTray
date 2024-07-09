@extends('template')

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
    <a href="/sellers" class="btn btn-primary">Voltar</a>
</body>

</html>