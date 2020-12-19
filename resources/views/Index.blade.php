<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FEFUSPA</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="{{URL::asset('images/logo.svg')}}" alt="logo" class="logo">
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Entrar</h1>
            <form method="post" action="{{route('usuario.login')}}">
              @csrf
              <div class="form-group">
                <label for="CPF">CPF</label>
                <input type="text" name="CPF" id="CPF" class="form-control" placeholder="000.000.000-00">
              </div>
              <div class="form-group mb-4">
                <label for="password">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" placeholder="digite sua senha">
              </div>
              <input name="login" id="login" class="btn btn-block login-btn" type="button" value="Entrar">
            </form>
            <a href="#!" class="forgot-password-link">Esqueceu a senha?</a>
            <p class="login-wrapper-footer-text">Não possui uma conta? <a href="{{ url('usuario/novo') }}" class="text-reset">Cadastre aqui</a></p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="{{URL::asset('images/login.jpg')}}" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>