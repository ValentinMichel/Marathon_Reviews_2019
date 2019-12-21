@extends('layouts.master')
@section('title', 'Inscription')
@section('content')
    <div class="container col-md-8" style="margin-top: 5%;">
        <!-- Material form register -->
        
        <!--supression de la div  Content-->
            <!-- Deplacement du h5 dans la forme -->

            <!--Card content-->
            <!--supression d'une div -->

                <!-- Form -->
                <form method="POST" class="formLog text-center" style="color: #757575;" action="{{ route('register') }}"> <!-- uniformisation des class avec le login -->

                    <h5 class="titreRegister">
                    <strong>Inscription</strong>
                    </h5>



                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <!-- First name -->
                            <div class="md-form">
                                <input type="text" id="materialRegisterFormFirstName"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <label for="materialRegisterFormFirstName">Nom</label>
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="col">
                            <!-- E-mail -->
                            <div class="md-form">
                                <input type="email" id="materialRegisterFormEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <label for="materialRegisterFormEmail">E-mail</label>
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" id="materialRegisterFormPassword" name="password"  required autocomplete="new-password" class="form-control @error('password') is-invalid @enderror" aria-describedby="materialRegisterFormPasswordHelpBlock">
                                <label for="materialRegisterFormPassword">Mot de passe</label>
                                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                    Au moins 8 caractères !
                                </small>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="col">
                            <div class="md-form">
                                <input type="password" id="password-confirm" name="password_confirmation"  required autocomplete="new-password" class="form-control @error('password-confirm') is-invalid @enderror" aria-describedby="materialRegisterFormPasswordHelpBlock">
                                <label for="password-confirm">Confirmation mot de passe</label>
                                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                    Au moins 8 caractères !
                                </small>
                            </div>
                            @error('password-confirm')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <!--
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                        <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
                    </div>
                    -->

                    <!-- Sign up button -->
                    <button class="buttonLog" type="submit">Confirmer mon inscription</button>
                    <hr>
                    <!-- Terms of service -->
                    <p>En confirmant <em>votre inscription</em>, vous agréer à nos <a href="">conditions d'utilisation.</a>

                </form>
                <!-- Form -->

    

    
        <!-- Material form register -->
    </div>
@endsection
