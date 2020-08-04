@extends('layout')

@section('contenu')
    <h1 class="text-center">Inscription</h1>
    <div class="container">
        <form action="" method="post">  
            {{ csrf_field() }}
            <div class="form-group">
                <label for="InputPseudoInscription">Pseudonyme</label>
                <input type="text" name="pseudo" id="InputPseudoInscription" class="form-control" placeholder="Nom du personnage" value="{{ old('pseudo') }}">
                @if ($errors->has('pseudo'))
                    <p>{{ $errors->first('pseudo') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="InputEmailInscription">Adresse email</label>
                <input type="email" name="email" id="InputEMailInscription" class="form-control" placeholder="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="InputPasswordInscription">Mot de passe</label>
                <input type="password" name="password" id="InputPasswordInscription" class="form-control" placeholder="Mot de passe">
                @if ($errors->has('password'))
                    <p>{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="InputConfirmPasswordInscription">Confirmer mot de passe</label>
                <input type="password" name="password_confirmation" id="InputcConfirmPasswordInscription" class="form-control" placeholder="Confirmer Mot de passe">
                @if ($errors->has('confirmpassword'))
                    <p>{{ $errors->first('password_confirmation') }}</p>
                @endif
            </div>
            <button type="submit" class="btn btn-success">S'inscrire</button>
        </form>
    </div>
@endsection