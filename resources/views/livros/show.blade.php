@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Livros cadastrados</div>

                    <br>
                    <div class="float-left">
                        <a href="/livros/create" class="btn btn-primary float-right">Novo Livro</a>
                    </div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="row">

                                <div class="col-md-4 col-sm-6">
                                    <div class="card">
                                        <img class="card-img-top img-fluid"
                                             src="https://dummyimage.com/400x200/563d7c/ffffff&text=.card-img-topfff&text=.card-img-top"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $livro->nome }}</h4>
                                            <p class="card-text">{{ $livro->descricao }}</p>
                                            <a href="#" class="btn btn-primary">Ação</a>


                                        </div>

                                        @if($livro->checkEmpestado())
                                            Livre
                                            @else
                                            Emprestado
                                        @endif
                                    </div>
                                </div>

                        </div>


                    </div>

                    {{ $livros->links() }}

                </div>
            </div>
        </div>
    </div>
@endsection
