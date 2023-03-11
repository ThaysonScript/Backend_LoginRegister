@extends('layouts/layoutRegistro')

@section('content')
    
    <form method="post" action="registro/enviar">
        @csrf

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">

        <button type="submit">Enviar</button>

    </form>

@endsection