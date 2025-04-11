@extends('welcome')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">

        @if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

      <h3 class="text-center mb-4">Cadastro</h3>
      <form method="POST" action="{{ url('/users/register') }}">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" name="name" class="form-control" required autofocus>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirme a Senha</label>
            <input type="password" name="password_confirmation" class="form-control" required>
          </div>
        <button type="submit" class="btn btn-success w-100">Cadastrar</button>
      </form>
    </div>
  </div>
</div>
@endsection

