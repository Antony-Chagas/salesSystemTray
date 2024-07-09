@extends('template')

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

        </div>


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

                    <input class="form-control" type="email" name="email" value="{{$seller->email}}">
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