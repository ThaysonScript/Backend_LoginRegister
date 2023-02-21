@extends('layouts.main')

@section('content_header')
    <h1>Register</h1>
@endsection

@section('content_main')
    <form action="/register">
        <div class="container_register">
            <label for="email">Email Enter:</label>
            <input type="email" name="email" id="email">

            <label for="pass">password Enter:</label>
            <input type="password" name="pass" id="pass" >

            <input type="button" value="Registrar">
            <button>
                <a href="/">voltar</a>
            </button>
        </div>
    </form>
@endsection

@section('content_footer')

@endsection