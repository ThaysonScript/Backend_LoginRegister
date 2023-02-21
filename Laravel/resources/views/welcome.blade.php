@extends('layouts.main')

@section('title', 'Home')

@section('content_header')

@endsection

@section('content_main')
    <div class="container_home">
        <button>
            <a href="/login">Deseja fazer login?</a>
        </button>
        <br>
        <button>
            <a href="/register">Deseja fazer registro?</a>
        </button>
        <button>
            <a href="/logado">Log teste</a>
        </button>
    </div>
@endsection

@section('content_footer')

@endsection