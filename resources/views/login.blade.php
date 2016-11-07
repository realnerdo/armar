<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grupo Armar</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Gentelella -->
    <link href="{{ asset('css/gentelella.min.css') }}" rel="stylesheet">

</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form>
                        <h1>Iniciar Sesión</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Usuario" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Contraseña" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="{{ url('create-user') }}">Entrar</a>
                            <a class="reset_pass" href="#">¿Se te olvidó tu contraseña?</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <div>
                                <h1><i class="fa fa-paw"></i> Grupo Armar</h1>
                                <p>©2016 Todos los derechos reservados. Grupo Armar.</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
