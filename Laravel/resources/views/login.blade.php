@extends('layouts.main')

@section('content_header')
    <h1>Login</h1>
@endsection

@section('content_main')
    <form action="/login">
        <div class="container_login">
            <label for="email">Email Enter:</label>
            <input type="email" name="email" id="email">

            <label for="pass">password Enter:</label>
            <input type="password" name="pass" id="pass" >

            <input type="button" value="Enter">

            <button>
                <a href="/">Deseja voltar para a pagina inicial?</a>
            </button>
        </div>
    </form>
@endsection

@section('content_footer')

@endsection