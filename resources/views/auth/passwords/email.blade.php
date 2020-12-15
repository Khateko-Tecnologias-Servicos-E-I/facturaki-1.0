<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FacturAKI | Recuperação de senha</title>

    <link href="{{ asset('back/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('back/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('back/css/style.css') }}" rel="stylesheet">
    <link rel="icon"
          type="image/png"
          href="{{ asset('back/img/favicon.jpg') }}">
</head>

<body class="gray-bg">


    <div class="passwordBox animated fadeInDown">
        <div class="row">

            <div class="col-md-12">
                <div class="ibox-content">

                    <h2 class="font-bold">Recuperação de senha</h2>

                    <p>
                        Preencha uma conta válida de e-mail e a sua senha senha enviada para você.
                    </p>

                    <div class="row">

                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail..." autofocus >

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <button type="submit" class="btn btn-primary block full-width m-b">Recuparar a minha conta</button>
                                <div class="col-6 p-0">
                                    <a class="btn btn-sm btn-white btn-block" href="{{ route('login') }}"><i class="fa fa-backward"></i> Voltar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                <small>Um produto da <a href="https://khateko.com" target="_blank">Khateko Tec. & Serviços</a></small>
            </div>
            <div class="col-md-6 text-right">
               <small>&copy; 2020</small>
            </div>
        </div>
    </div>



</body>

</html>


