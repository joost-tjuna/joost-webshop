@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 registration col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Register</h1>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Voornaam + achternaam:</label>

                           <div class="col-md-5">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - street name (straatnaam) - - -  - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
                            <label for="streetname" class="col-md-3 control-label">Straatnaam</label>

                            <div class="col-md-5">
                                <input id="streetname" type="text" class="form-control" name="streetname" required >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - street number (Huisnummer) - - - - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
                            <label for="streetnumber" class="col-md-3 control-label">Huisnummer</label>

                            <div class="col-md-5">
                                <input style="width:70px;" id="streetnumber" type="number" class="form-control" name="streetnumber" required >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - Zipcode (postcode) - - -  - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
                            <label for="zipcode" class="col-md-3 control-label">Postcode</label>

                            <div class="col-md-5">
                                <input id="zipcode" type="text" class="form-control" name="zipcode" required >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - abode (woonplaats) - - -  - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
                            <label for="abode" class="col-md-3 control-label">Woonplaats</label>

                            <div class="col-md-5">
                                <input id="abode" type="text" class="form-control" name="abode" required >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - Phone number (telefoon nummer) - - - - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
                            <label for="phonenumber" class="col-md-3 control-label">Telefoon nummer</label>
                              <div class="col-md-5">
                                 <input id="phonenumber" type="number" class="form-control" name="phonenumber" required >

                                 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                 @endif
                              </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - E-mail address - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label">E-Mail Adres</label>

                            <div class="col-md-5">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - password (wachtwoord) - - - - - - - - - - - - - - - - - - - - - - -->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-3 control-label">Wachtwoord</label>

                            <div class="col-md-5">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-3 control-label">Herhaal wachtwoord</label>

                            <div class="col-md-5">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-5 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
