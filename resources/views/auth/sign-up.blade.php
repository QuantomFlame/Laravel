@extends('layouts.app')

@section('title', 'Sign Up')

@section('body', 'sign-up')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-md-8 col-md-offset-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Create an account</h3>
                    </div>
                    <div class="card-body">
                        <form class="test" method="POST" action="{{ url('sign-up') }}" enctype="multipart/form-data">
                            @csrf

                            @include('flash-messages')

                            <h4 class="font-weight-bold section-header">Personal Details</h4>

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Username*</label>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="username" value="{{ old('username') }}">

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong class="error-message">{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">First Name*</label>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="first_name" value="{{ old('first_name') }}">

                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                            <strong class="error-message">{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Middle Name*</label>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="middle_name" value="{{ old('middle_name') }}">

                                    @if ($errors->has('middle_name'))
                                        <span class="help-block">
                                            <strong class="error-message">{{ $errors->first('middle_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Last Name*</label>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}">

                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                            <strong class="error-message">{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label" for="exampleFormControlSelect1">Gender*</label>

                                <div class="form-group col-md-12">
                                    <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                        <option value="" selected>Select Gender</option>
                                        <option value="1" {{ old('gender') == '1' ? 'selected' : '' }}>Male</option>
                                        <option value="2" {{ old('gender') == '2' ? 'selected' : '' }}>Female</option>
                                    </select>

                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                            <strong class="error-message">{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Birthday*</label>

                                <div class="form-group col-md-12">
                                    <input class="form-control date" type="text" name="birthday" placeholder="yyyy-mm-dd" value="{{ old('birthday') }}">

                                    @if ($errors->has('birthday'))
                                        <span class="help-block">
                                            <strong class="error-message">{{ $errors->first('birthday') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <h4 class="font-weight-bold section-header">Account Details</h4>

                            <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Avatar</label>

                                <div class="col-md-12">
                                    <input class="form-control" type="file" name="avatar" value="{{ old('avatar') }}">

                                    @if ($errors->has('avatar'))
                                        <span class="help-block">
                                            <strong class="error-message">{{ $errors->first('avatar') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

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
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Confirm Password*</label>

                                <div class="col-md-12">
                                    <input id="password-confirmation-field" class="form-control" type="password" name="password_confirmation">

                                    <span toggle="#password-confirmation-field" class="fa fa-fw fa-eye field-icon toggle-password-confirmation"></span>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong class="error-message">{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <h4 class="font-weight-bold section-header">Contact Details</h4>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Address*</label>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="address" value="{{ old('address') }}">

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong class="error-message">{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label" for="exampleFormControlSelect1">Country</label>

                                <div class="form-group col-md-12">
                                    <select name="country" class="countries order-alpha form-control" id="countryId">
                                        <option value="" {{ old('country') }}>Select Country</option>
                                    </select>

                                    @if ($errors->has('country'))
                                        <span class="help-block">
                                            <strong class="error-message">{{ $errors->first('country') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label" for="exampleFormControlSelect1">State</label>

                                <div class="form-group col-md-12">
                                    <select name="state" class="states order-alpha form-control" id="stateId">
                                        <option value="">Select State</option>
                                    </select>

                                    @if ($errors->has('state'))
                                        <span class="help-block">
                                            <strong class="error-message">{{ $errors->first('state') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label" for="exampleFormControlSelect1">City</label>

                                <div class="form-group col-md-12">
                                    <select name="city" class="cities order-alpha form-control" id="cityId">
                                        <option value="">Select City</option>
                                    </select>

                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                            <strong class="error-message">{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Phone*</label>

                                <div class="col-md-12">
                                    <input class="form-control" type="tel" name="phone" value="{{ old('phone') }}">

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong class="error-message">{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                    <button type="submit" class="btn btn-custom btn-block">
                                        <i class="fa fa-btn fa-user"></i> Sign Up
                                    </button>
                                </div>

                                <hr/>

                                <div class="col-md-12 col-md-offset-4">
                                    <div class="text-center">
                                        <a class="is-account-created" href="{{ url('/sign-in') }}">
                                            <strong>Already have an account?</strong>
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
    <script type="text/javascript" src="{{ asset('js/country-state-city.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/form.js') }}"></script>
@endsection
