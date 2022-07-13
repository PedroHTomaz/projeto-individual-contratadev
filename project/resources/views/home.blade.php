@extends('template.users')
@section('title', 'Contrata Dev')
@section('body')
<div class="d-flex flex-row-reverse justify-content-center align-items-center home">
    <div>
        <h1 class="display-1">Contrata Dev</h1>
        <div class="">
            <hr>
            <p class="lead">
                Aqui você encontra os melhores devs do mercado!<br>
                E o melhor: de maneira <span>simples</span> e <span>fácil</span>.
            </p>
            <div class="text-end">
                <a href="#" class="btn btn primary">ENTRAR</a>
                <a href="#" class="btn btn-outline-primary px-4 ms-3">CADASTRAR</a>
            </div>
        </div>
        <div>
            <img src="{{ asset('assets/interview.svg') }}" alt="ilustração de uma entrevista" height="400px" class="img-fluid col-8">
        </div>
    </div>
</div>
@endsection