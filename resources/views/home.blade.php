@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h1 class="display-4">Bem-vindo ao Chirper!</h1>
    <p class="lead">Compartilhe suas ideias ultilizando os campos de preenchimento.</p>

    <div class="mt-4">
        <livewire:chirps />
    </div>
</div>
@endsection