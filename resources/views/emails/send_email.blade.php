@extends('template')

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