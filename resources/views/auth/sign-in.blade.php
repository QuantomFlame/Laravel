@extends('layouts.app')

@section('title', 'Sign In')

@section('body', 'sign-in')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-md-8 col-md-offset-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Sign in your account</h3>
                    </div>
                    <div class="card-body">
                        <form class="test" method="POST" action="{{ url('sign-in') }}" enctype="multipart/form-data">
                            @csrf

                            @include('flash-messages')

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Email*</label>

                                <div class="col-md-12">
                                    <input class="form-control" type="email" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong class="error-message">{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Password*</label>

                                <div class="col-md-12">
                                    <input id="password-field" class="form-control" type="password" name="password">

                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong class="error-message">{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-12 col-md-offset-4 mt-10">
                                    <div class="text-right">
                                        <a class="is-account-created" href="{{ url('/password/reset') }}">
                                            <strong>Forgot password?</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                    <button type="submit" class="btn btn-custom btn-block">
                                        <i class="fa fa-btn fa-user"></i> Sign In
                                    </button>
                                </div>

                                <hr/>

                                <div class="col-md-12 col-md-offset-4">
                                    <div class="text-center">
                                        <a class="is-account-created" href="{{ url('/sign-up') }}">
                                            <strong>Don't have an account?</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/form.js') }}"></script>
@endsection
