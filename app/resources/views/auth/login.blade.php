
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Polla World Cup | Login </title>
    
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatable.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
                
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{URL::asset('js/jquery.tablesorter.js')}}"></script>
    
</head>
<body>
    <div id="app">
        
        <main class="content_web">

            <br><br>

            <div class="container">
    <div class="row">
        <div class="col-md-12 title_polla">
            <img src="{{ asset('img/logo.png') }}" style="height: 205px;">
        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-md-4">
            <div class="title m-b-md" style="font-size: 64px; margin-bottom: 30px; text-align: center; color: #fff">
                
            </div>
            @guest
                <div class="card">

                    <div class="card-header"><h4>{{ __('Login') }}</h4></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <input type="hidden" name="is_approved" value="1">

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail Address">
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <button type="" class="btn btn-primary" onclick="window.location='{{ route('register') }}'" style="width: 100%;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2" style="text-align: center;">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2" style="text-align: center;">
                                <p>Questions? contact@pollaworldcup.com</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            @else   
                <div class="col-md-12">
                    <ul style="text-align: center; list-style: none;">
                        <li>
                            
                        </li>   
                        <li>
                            <a href="{{route('home')}}"><button class="btn btn-primary" id="close"> Go back Home </button></a>
                        </li>
                    </ul>
                </div>
            @endguest
        </div>
    </div>
</div>

@include('admin.partials.js')

<script src="{{URL::asset('js/app.js')}}"></script>


        </main>
    </div>
    
</body>
</html>




