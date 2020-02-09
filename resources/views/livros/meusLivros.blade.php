@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Meus Livros</div>

                    <br>
                    <div class="float-left">
                        {{--                        <a href="/livros/create" class="btn btn-primary float-right">Novo Livro</a>--}}
                    </div>

                    <div class="card-body">


                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="row">
                            @foreach($livros as $livro)
                                <div class="col-md-4 col-sm-6">
                                    <div class="card">
                                        <img class="card-img-top img-fluid"
                                             src="/uploads/images/{{$livro->imagem}}"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $livro->nome }}</h4>
                                            <p class="card-text">{{ $livro->descricao }}</p>
                                        </div>
                                    </div>

                                </div>
                            @endforeach

                        </div>


                    </div>

                    {{ $livros->links() }}

                </div>
            </div>
        </div>
    </div>
@endsection
