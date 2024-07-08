<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Enviar E-mail</title>
</head>

<body>

    <p>Olá, </p>

    <p>Vendas realizasdas hoje:</p>



    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID da venda</th>
                <th scope="col">Valor</th>
                <th scope="col">Comissão</th>
                <th scope="col">Id do vendedor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
            <tr>
                <th scope="row">{{ $sale->id }}</th>
                <td>R$ {{ number_format($sale->sale_value, 2,',','.') }}</td>
                <td>R$ {{ number_format($sale->commission, 2,',','.') }}</td>
                <td>{{ $sale->seller_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <P>E-mail enviado pelo sisema de vendas!</P>

</body>

</html>