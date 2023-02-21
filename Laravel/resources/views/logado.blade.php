@extends('layouts.main')

@section('title', 'Bem vindo')

@section('content_header')
    <h1>Bem vindo</h1>
    <nav>
        <ul>
            <li>
                <a href="/projetos">Projetos Cadastrados</a>
            </li>

            <li>
                Criar Projetos
            </li>
        </ul>
    </nav>
@endsection

@section('content_main')
    <div>
        <h2>Gerencie Seus Projetos</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae nulla omnis ipsa repellendus officiis modi non temporibus. In natus fugiat at facere quidem tempora, ipsum maiores nam suscipit doloribus dolores?</p>
    </div>

    <div>
        <h2>Seja Produtivo</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error esse nam tempore facere? Magnam dolorem fugiat tempora dicta earum blanditiis placeat, natus, perferendis nulla atque aliquid et! Minus, corrupti dolorem?</p>
    </div>
@endsection

@section('content_footer')

@endsection