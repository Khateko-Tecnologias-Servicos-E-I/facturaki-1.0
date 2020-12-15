<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FacturAKI | Registo</title>

    <link href="{{ asset('back/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('back/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('back/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('back/css/style.css') }}" rel="stylesheet">
    <!--Favicon-->
    <link rel="icon"
          type="image/png"
          href="{{ asset('back/img/favicon.jpg') }}">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"><img src="{{ asset('back/img/facturaki-logo.png') }}"></h1>

            </div>
            <h3>Registo de Utilizador</h3>
            <p>Criação de nova conta de utilizador</p>
            <form class="m-t" role="form" action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" placeholder="Nome completo..." class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <input type="email" placeholder="E-mail..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Senha..." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <input id="password-confirm" placeholder="Confirmar Senha..." type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="form-group">
                    <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Concordo com os <a href="#"> termos e políticas.</a> </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Registar</button>

                <p class="text-muted text-center"><small>Possui uma conta?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route('login') }}">Entrar</a>
            </form>
            <p class="m-t"> <small>Um produto da <a href="https://khateko.com" target="_blank">Khateko Tec. & Serviços</a> &copy; 2020</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('back/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('back/js/popper.min.js') }}"></script>
    <script src="{{ asset('back/js/bootstrap.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('back/js/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
