@extends('template')

<body>


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
                <th>
                    <a href="{{ route('sales.edit', ['sale'=> $sale -> id])}}" class='btn btn-success'> Editar </a>
                    <a href="{{ route('sales.show', ['sale'=> $sale -> id])}}" class='btn btn-danger'> Excluir </a>
                </th>
            </tr>
            @endforeach
        </tbody>


    </table>

    <a href="/sellers" class="btn btn-primary">Voltar</a>

</body>

</html>