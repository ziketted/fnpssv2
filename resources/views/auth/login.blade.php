<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Fond National de Promotion et de Service Social</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

</head>


<body>

    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="card card-pages">

            <div class="card-body">
                <div class="text-center m-t-0 m-b-15">
                    <a href="index.html" class="logo logo-admin"><img src="assets/images/fnpss.png" alt=""
                            height="70"></a>
                </div>

                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <div class="col-12">
                            <input type="email" name="email" value="{{old('email','') }}" class="form-control"
                                placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-12">
                            <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">
                                    Se souvenir de moi
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center m-t-40">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block btn-lg waves-effect waves-light"
                                type="submit">Connexion
                            </button>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-40">
                        <div class="col-12">
                            <a href="{{ url('auth/google') }}"
                                class="btn btn-danger btn-block btn-lg waves-effect waves-light" type="submit">
                                <i class="ion ion-logo-googleplus"></i>
                            </a>
                        </div>
                    </div>

                    <div class="form-group row m-t-30 m-b-0">
                        <div class="col-sm-7">
                            <a href="{{ route('password.request') }}" class="text-muted"><i
                                    class="fa fa-lock m-r-5"></i> Mot de passe oublié ?</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="{{ route('register') }}" class="text-muted">Creer un compte</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <!-- jQuery  -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/detect.js')}}"></script>
    <script src="{{asset('assets/js/fastclick.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>

    <script src="{{asset('assets/js/app.js')}}"></script>

</body>

</html>
