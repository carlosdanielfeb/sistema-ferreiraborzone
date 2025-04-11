@extends('welcome')

@section('content')
<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      Bem-vindo ao Dashboard
    </div>
    <div class="card-body">
      <h5 class="card-title">Olá, {{ Auth::user()->name ?? Auth::user()->email }}</h5>
      <p class="card-text">Você está logado com sucesso.</p>
      <form method="POST" action="{{ url('/logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Sair</button>
      </form>
    </div>
  </div>
</div>
@endsection
