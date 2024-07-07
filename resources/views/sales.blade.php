<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Vendas</title>
</head>

<body>
   
    <?php 
     $id_vendedor = $_GET['sellerID'];
     $name_vendedor = $_GET['sellerName'];
     $email_vendedor = $_GET['sellerEmail'];
    ?>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID do vendedor</th>
                <th scope="col">Nome do endedor</th>
                <th scope="col">E-mail do endedor</th>
                <th scope="col">Ações</th
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$id_vendedor}}</th>
                <td>{{$name_vendedor}}</td>
                <td>{{$email_vendedor}}</td>
                <td><a href="{{ route('sales.create')}}" class='btn btn-primary'> Adicionar nova venda </a></td>
            </tr>
    </table>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID da venda</th>
                <th scope="col">Valor</th>
                <th scope="col">Comissão</th>
                <th scope="col">Data da venda</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>

            @foreach($sales as $sale)
            @if($sale -> seller_id == $id_vendedor)
                <?php
              $d = explode('-', $sale -> sale_date);
              $write_date = $d[2] . "/" . $d[1] . "/" . $d[0];

              $sale_value = number_format($sale -> sale_value, 2, ',', '.');
              $commission = number_format($sale -> commission, 2, ',', '.');
              ?>
            <tr>
                <th scope="row">{{$sale -> id}}</th>
                <th scope="row">{{$sale_value}}</th>
                <th scope="row">{{$commission}}</th>
                <th scope="row">{{$write_date}}</th>
                <th>
                    <a href="{{ route('sales.edit', ['sale'=> $sale -> id])}}" class='btn btn-success'> Editar </a>
                    <a href="{{ route('sales.show', ['sale'=> $sale -> id])}}" class='btn btn-danger'> Excluir </a>
                </th>
            </tr>
            @endif
            @endforeach
        </tbody>


    </table>



</body>

</html>