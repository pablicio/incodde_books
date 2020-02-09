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
                            @foreach($livros as $livro)
                                <div class="col-md-4 col-sm-6">
                                    <div class="card">
                                        <img class="card-img-top img-fluid"
                                             src="/uploads/images/{{$livro->imagem}}"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $livro->nome }}</h4>
                                            <p class="card-text">{{ $livro->descricao }}</p>

                                            @if($livro->checkEmpestado())
                                                <span id="emprestado{{$livro->id}}" class="badge badge-warning">Emprestado</span>
                                            @else
                                                <a href="#" class="btn btn-primary emprestado{{$livro->id}}"
                                                   data-toggle="modal"
                                                   data-target="#applicantModal{{$livro->id}}">Ver</a>

                                                <span class="badge badge-success emprestado{{$livro->id}}">Disponível</span>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="modal fade" id="applicantModal{{$livro->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="applicantModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="card">
                                                <img class="card-img-top img-fluid"
                                                     src="/uploads/images/{{$livro->imagem}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $livro->nome }}</h4>
                                                    <p class="card-text">{{ $livro->descricao }}</p>
                                                    <a href="#" data-livro="{{$livro->id}}"
                                                       class="btn btn-primary emprestar">Emprestar</a>
                                                </div>
                                            </div>
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
@push('scripts')
    <script>
        $('.emprestar').click(function () {
            var livroId = $(this).data("livro")
            $.ajax({
                type: "GET",
                url: '/livros/novoEmprestimo',
                data: {livroId: livroId},
                success: function () {
                        $('.emprestado' + livroId).hide()
                        $('.emprestado' + livroId).parent().append('<span class="badge badge-warning">Emprestado</span>')
                        $('#applicantModal' + livroId).modal('toggle');
                    }
            });
        })
    </script>
@endpush
