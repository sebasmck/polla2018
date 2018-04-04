@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="LastName" class="col-md-4 col-form-label text-md-right">{{ __('LastName') }}</label>
    
                                <div class="col-md-6">
                                    <input id="LastName" type="text" class="form-control{{ $errors->has('LastName') ? ' is-invalid' : '' }}" name="LastName" value="{{ old('LastName') }}" required autofocus>
    
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('LastName') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="NickName" class="col-md-4 col-form-label text-md-right">{{ __('NickName') }}</label>
    
                                <div class="col-md-6">
                                    <input id="NickName" type="text" class="form-control{{ $errors->has('NickName') ? ' is-invalid' : '' }}" name="NickName" value="{{ old('NickName') }}" required autofocus>
    
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('NickName') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>    

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Repeat Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __(' E-Mail') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="repeat-email" type="repeat_email" class="form-control{{ $errors->has('repeat_email') ? ' is-invalid' : '' }}" name="repeat_email" value="{{ old('repeat_email') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                </div>
                        </div>

                        <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Repeat E-Mail') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="repeat-email" type="email" class="form-control{{ $errors->has('repeat_email') ? ' is-invalid' : '' }}" name="repeat_email" value="{{ old('repeat_email') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                </div>
                        </div>

                        <div class="form-group row">
                                <label for="City" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="City" type="" class="form-control{{ $errors->has('City') ? ' is-invalid' : '' }}" name="City" value="{{ old('city') }}" required>
                                        @if ($errors->has('City'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('City') }}</strong>
                                            </span>
                                        @endif
                                </div>
                        </div>

                        <div class="form-group row">
                                <label for="Cellphone" class="col-md-4 col-form-label text-md-right">{{ __('Cellphone') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="Cellphone" type="" class="form-control{{ $errors->has('Cellphone') ? ' is-invalid' : '' }}" name="Cellphone" value="{{ old('Cellphone') }}" required>
                                        @if ($errors->has('Cellphone'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('Cellphone') }}</strong>
                                            </span>
                                        @endif
                                </div>
                        </div>

                        <div class="form-group row">
                                <label for="Referred_By" class="col-md-4 col-form-label text-md-right">{{ __('Referred By') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="Referred_By" type="" class="form-control{{ $errors->has('Referred_By') ? ' is-invalid' : '' }}" name="Referred_By" value="{{ old('Referred_By') }}" required>
                                        @if ($errors->has('Referred_By'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('Referred_By') }}</strong>
                                            </span>
                                        @endif
                                </div>
                        </div>

                       



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
