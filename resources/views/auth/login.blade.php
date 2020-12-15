<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FacturAKI | Entrada</title>

    <link href="{{ asset('back/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('back/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('back/css/style.css') }}" rel="stylesheet">
    <!--Favicon-->
    <link rel="icon"
          type="image/png"
          href="{{ asset('back/img/favicon.jpg') }}">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"><img src="{{ asset('back/img/facturaki-logo.png') }}"></h1>

            </div>
            <h3>Bem-vindo(a) ao FacturAki</h3>
{{--            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.--}}
{{--                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->--}}
{{--            </p>--}}
            <p>Preencha as credenciais</p>
            <form class="m-t" role="form" action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" placeholder="Preencha o e-mail..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" placeholder="********" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Entrar</button>

                <a href="{{ url('password/reset') }}"><small>Esqueceu a senha?</small></a>
                <p class="text-muted text-center"><small>Não possui conta?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Criar nova conta</a>
            </form>
            <p class="m-t"> <small>Um produto da <a href="https://khateko.com" target="_blank">Khateko Tec. & Serviços</a> &copy; 2020</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('back/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('back/js/popper.min.js') }}"></script>
    <script src="{{ asset('back/js/bootstrap.js') }}"></script>

</body>

</html>
