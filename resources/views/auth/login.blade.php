@extends('layouts.app')
@section('body_class') account-body accountbg @endsection
@section('content')
<div class="row vh-100 ">
    <div class="col-12 align-self-center">
        <div class="auth-page">
            <div class="card auth-card shadow-lg">
                <div class="card-body">
                    <div class="px-3">
                        <div class="auth-logo-box">
                            <img src="{{asset('assets_theme/images/logo-sm.png')}}" height="55" alt="Digital++"
                                class="auth-logo">
                        </div>

                        <div class="text-center auth-logo-text">
                            <h4 class="mt-0 mb-3 mt-5">{{ config('Digital++', 'Digital++') }}</h4>
                            <p class="text-muted mb-0"></p>
                        </div>
                        <!--end auth-logo-text-->

                        <div class="card-body">
                            <form class="form-horizontal auth-form my-4" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group  ">
                                    <label for="email">e-mail</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-user"></i>
                                        </span>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="email" value="{{ old('email') }}" required
                                            autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" id="password" name="password"
                                            required autocomplete="current-password">
                                    </div>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <!--end form-group-->

                                <div class="form-group row mt-4">
                                    <div class="col-sm-6">


                                        <div class="custom-control custom-switch switch-success">
                                            <input type="checkbox" class="custom-control-input" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label text-muted"
                                                for="remember">Recuérdame</label>
                                        </div>



                                    </div>
                                    <!--end col-->
                                    <div class="col-sm-6 text-right">
                                        <a href="{{ route('password.request') }}" class="text-muted font-13"><i
                                                class="dripicons-lock"></i> ¿Has olvidado la contraseña?</a>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end form-group-->

                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-dark btn-round btn-block waves-effect waves-light"
                                            type="submit">Entrar <i class="dripicons-check ml-1"></i></button>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end form-group-->
                            </form>
                            <!--end form-->
                        </div>
                        <!--end /div-->

                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
                
            </div>
        </div>

    </div>

    @endsection