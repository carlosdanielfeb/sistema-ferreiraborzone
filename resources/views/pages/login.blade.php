@extends('welcome')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">


    <div class="col-md-4">
      <h3 class="text-center mb-4">Login</h3>
      <form method="POST" action="{{ url('/users/login') }}">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" name="email" class="form-control" required autofocus>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
      </form>
      <div class="text-center mt-3">
        <span>Não tem conta?</span><br>
        <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-sm mt-2">Registrar</a>
      </div>
    </div>
  </div>
</div>
@endsection
