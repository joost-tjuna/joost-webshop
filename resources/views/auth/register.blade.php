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
<!-- - - - - - - - - - - - - - - - - - - - - - - firstname (voornaam) - - - - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
                            <label for="voornaam" class="col-md-3 control-label">Voornaam</label>

                            <div class="col-md-5">
                                <input id="voornaam" type="text" class="form-control" name="voornaam"  required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - lastname (achternaam) - - -  - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
                            <label for="achternaam" class="col-md-3 control-label">Achternaam</label>

                            <div class="col-md-5">
                                <input id="achternaam" type="text" class="form-control" name="achternaam" required autofocus>
 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - Email - - -  - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
                            <label for="email" class="col-md-3 control-label">E-Mail Adres</label>

                            <div class="col-md-5">
                                <input id="email" type="email" class="form-control" name="email"  required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - street name (straatnaam) - - -  - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
                            <label for="straatnaam" class="col-md-3 control-label">Straatnaam</label>

                            <div class="col-md-5">
                                <input id="straatnaam" type="text" class="form-control" name="straatnaam" required >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - House number (Huisnummer) - - - - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
                            <label for="huisnummer" class="col-md-3 control-label">Huisnummer</label>

                            <div class="col-md-5">
                                <input style="width:70px;" id="huisnummer" type="number" class="form-control" name="huisnummer" required >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - Zipcode (postcode) - - -  - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
                            <label for="postcode" class="col-md-3 control-label">Postcode</label>

                            <div class="col-md-5">
                                <input id="postcode" type="text" class="form-control" name="postcode" required >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - abode (woonplaats) - - -  - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
                            <label for="woonplaats" class="col-md-3 control-label">Woonplaats</label>

                            <div class="col-md-5">
                                <input id="woonplaats" type="text" class="form-control" name="woonplaats" required >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - Phone number (telefoon nummer) - - - - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
                            <label for="telefoonnr" class="col-md-3 control-label">Telefoon nummer</label>

                            <div class="col-md-5">
                                <input id="telefoonnr" type="number" class="form-control" name="telefoonnr" required >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - Username (Gebruikers naam) - - - - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
                            <label for="gebruikersnaam" class="col-md-3 control-label">Gebruikersnaam</label>

                            <div class="col-md-5">
                                <input id="gebruikersnaam" type="text" class="form-control" name="gebruikersnaam" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - Password (wachtwoord) - - - - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
                            <label for="wachtwoord" class="col-md-3 control-label">Wachtwoord</label>

                            <div class="col-md-5">
                                <input id="wachtwoord" type="password" class="form-control" name="wachtwoord" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- - - - - - - - - - - - - - - - - - - - - - - Confirm password (herhaal wachtwoord) - - - - - - - - - - - - - - - - - - - - - - -->
                        <div class="register-label form-group">
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
