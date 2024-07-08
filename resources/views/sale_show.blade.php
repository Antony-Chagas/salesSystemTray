<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Excluir venda</title>
</head>

<body>
    <h2>Excluir venda</h2>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">ID da venda</th>
                <th scope="col">Valor</th>
                <th scope="col">Comissão</th>
                <th scope="col">Data da venda</th>
                <th scope="col">ID vendedor</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $d = explode('-', $sale->sale_date);
            $write_date = $d[2] . "/" . $d[1] . "/" . $d[0];

            $sale_value = number_format($sale->sale_value, 2, ',', '.');
            $commission = number_format($sale->commission, 2, ',', '.');
            ?>
            <tr>
                <th scope="row">{{$sale -> id}}</th>
                <th scope="row">{{$sale_value}}</th>
                <th scope="row">{{$commission}}</th>
                <th scope="row">{{$write_date}}</th>
                <th scope="row">{{$sale -> seller_id}}</th>
        </tbody>
    </table>

    <div class="alert alert-warning" role="alert" style="width: 20%; text-align: center">
        Confirme se é essa venda
    </div>


    <form action="{{ route('sales.destroy', ['sale'=> $sale->id])}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>

</body>

</html>