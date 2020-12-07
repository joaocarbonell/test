@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.min.css"/>
@endsection


@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <hi class="heading has-text-weight-bold is-size-4">Editar Artigo</hi>

            <form method="POST" action="/articles/{{$article->id}}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" type="text" >
                        Titulo
                    </label>
                    <div class="control">
                        <input class="input" type="text" name="title" id="title" value="{{ $article->title }}">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="excerpt">
                        Trecho
                    </label>
                    <div class="control">
                        <textarea class="textarea" name="excerpt" id="excerpt" value="">{{ $article->excerpt }}</textarea>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="body">
                        Texto
                    </label>
                    <div class="control">
                        <textarea class="textarea" name="body" id="body" value="">{{ $article->body }}</textarea>
                    </div>
                </div>
                <div class="control">
                    <button class="button is-link">Confirmar</button>
                </div>

            </form>
        </div>

    </div>

@endsection
