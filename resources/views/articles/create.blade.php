@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.min.css"/>
@endsection

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <hi class="heading has-text-weight-bold is-size-4">Novo Artigo</hi>

            <form method="POST" action="/articles">
                @csrf

                <div class="field">
                    <label class="label" type="text" >
                        Titulo
                    </label>
                    <div class="control">
                        <input class="input @error('title') is-danger @enderror" type="text" name="title" id="title" value="{{old('title')}}">

                        @error('title')
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="excerpt">
                        Trecho
                    </label>
                    <div class="control">
                        <textarea class="textarea @error('excerpt') is-danger @enderror"  name="excerpt" id="excerpt">{{old('excerpt')}}</textarea>
                        @error('excerpt')
                        <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="body">
                        Texto
                    </label>
                    <div class="control">
                        <textarea class="textarea @error('body') is-danger @enderror" name="body" id="body" >{{old('body')}}</textarea>
                        @error('body')
                        <p class="help is-danger">{{$errors->first('body')}}</p>
                        @enderror
                    </div>
                </div>
                <div class="control">
                    <button class="button is-link">Confirmar</button>
                </div>
                {{--                <div class="control">--}}
                {{--                    <button class="button is-text">Cancelar</button>--}}
                {{--                </div>--}}

            </form>
        </div>

    </div>

@endsection
