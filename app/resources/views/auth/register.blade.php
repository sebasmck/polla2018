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
            <div class="card">
                <div class="card-header"><h4>{{ __('Register') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('userregistration') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="First Name">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required placeholder="Last Name">

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="nickname" type="text" class="form-control{{ $errors->has('nickname') ? ' is-invalid' : '' }}" name="nickname" value="{{ old('nickname') }}" required placeholder="Nickname">

                                @if ($errors->has('nickname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                @endif
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
    
                        {{-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Repeat Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="E-Mail">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="repeatemail" type="email" class="form-control{{ $errors->has('repeatemail') ? ' is-invalid' : '' }}" name="repeatemail" value="{{ old('repeatemail') }}" required placeholder="Repeat E-Mail">
                                    @if ($errors->has('repeatemail'))repeatemail
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('repeatemail') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required placeholder="City">
                                    @if ($errors->has('city'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="cellphone" type="text" class="form-control{{ $errors->has('cellphone') ? ' is-invalid' : '' }}" name="cellphone" value="{{ old('cellphone') }}" required placeholder="Cellphone">
                                    @if ($errors->has('cellphone'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('cellphone') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">                                
                            <div class="col-md-12">
                                <input id="referredby" type="text" class="form-control{{ $errors->has('referredby') ? ' is-invalid' : '' }}" name="referredby" value="{{ old('referredby') }}" required placeholder="Referred By">
                                    @if ($errors->has('referredby'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('referredby') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                    
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="" class="btn btn-primary" onclick="window.location='{{ route('login') }}'" style="width: 100%;">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{URL::asset('js/app.js')}}"></script>
@endsection
