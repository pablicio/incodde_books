@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Meus Empréstimos</div>

                    <br>

                    <div class="card-body">


                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                            <div class="row">
                                @foreach($livros as $livro)
                                    <div class="col-md-4 col-sm-6 final{{ $livro->id }}">
                                        <div class="card">
                                            <img class="card-img-top img-fluid"
                                                 src="/uploads/images/{{$livro->imagem}}"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">{{ $livro->nome }}</h4>
                                                <p class="card-text">{{ $livro->descricao }}</p>


                                                <a href="#" class="btn btn-primary devolver" data-livro="{{$livro->id}}">Devolver</a>

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
        $('.devolver').click(function () {
            var livroId = $(this).data("livro")
            $.ajax({
                type: "GET",
                url: '/livros/devolverEmprestimo',
                data: {livroId: livroId},
                success: function () {
                    $('.final' + livroId).hide()

                }
            });
        })
    </script>
@endpush
