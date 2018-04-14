@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 title_polla">
            Polla World Cup
        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-md-4">
            <div class="title m-b-md" style="font-size: 64px; margin-bottom: 30px; text-align: center; color: #fff">
                
            </div>
            <div class="card">

                <div class="card-header"><h4>{{ __('Login') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            {{-- <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail Address">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

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

                                {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> --}}
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
        </div>
    </div>
</div>
<script src="{{URL::asset('js/app.js')}}"></script>
@endsection
