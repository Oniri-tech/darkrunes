@extends('layout')

@section('contenu')
    <h1 class='text-center'>Connexion</h1>
    <div class="container">
        <form action="" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="InputEmailConnexion">Adresse email</label>
                <input type="email" name="email" id="InputEMailConnexion" class="form-control" placeholder="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="InputPasswordConnexion">Mot de passe</label>
                <input type="password" name="password" id="InputPasswordConnexion" class="form-control" placeholder="Mot de passe">
                @if ($errors->has('password'))
                    <p>{{ $errors->first('password') }}</p>
                @endif
            </div>
            <button type="submit" class="btn btn-success">S'inscrire</button>
        </form>
    </div>
@endsection