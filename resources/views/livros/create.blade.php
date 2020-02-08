@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('livros.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="nome" class="col-md-4 col-form-label text-md-right">Nome</label>

                <div class="col-md-6">
                    <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome"
                           value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                    @error('nome')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="descricao" class="col-md-4 col-form-label text-md-right">Descrição</label>

                <div class="col-md-6">
                    <input id="descricao" type="text" class="form-control @error('descricao') is-invalid @enderror"
                           name="descricao"
                           value="{{ old('descricao') }}" required autocomplete="descricao">

                    @error('descricao')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="imagem" class="col-md-4 col-form-label text-md-right">Imagem</label>

                <div class="col-md-6">
                    <input  data-preview="#preview" id="imagem" type="file" class="form-control @error('imagem') is-invalid @enderror"
                           name="imagem"
                           value="{{ old('imagem') }}" required autocomplete="imagem">


                    @error('imagem')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
            </div>



            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Cadastrar') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
