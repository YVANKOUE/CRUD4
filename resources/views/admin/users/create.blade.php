@extends('admin.app.appp')

@section('title') | Ajouter un membre @endsection

@section('content')
<br>
<div class="main-container" style="margin-top: -35px;">
	<div class="pd-ltr-20">
		<div class="row fielset formavlidation-wrapper m-auto justify-content-center">
            <div class="col-md-10">
            @include('admin.app.nav')
                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading" >
                            <h4 class="card-title"><h3 class="m-0 font-weight-bold text-info">Créer un membre</h3>
                         </div>
                    </div>
                    <div class="card-body ">
                        <form  id="signupForm" method="post" class="form-horizontal" enctype="multipart/form-data" action="{{ route('home.create') }}">
                            @csrf
                            @method('GET')
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label" for="fname">{{ __('Nom') }}</label>
                                        <div class="">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="fname" name="name" placeholder="Nom" value="{{ old('name') }}"/>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label " for="uemail">{{ __('Email') }}</label>
                                        <div class="">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="uemail" name="email" placeholder="Email" value="{{ old('email') }}"/>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="row"> 
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label " for="mdp">{{ __('Mot de passe') }}</label>
                                        <div class="">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label " for="cmdp">{{ __('Confirmer le mot de passe') }}</label>
                                        <div class="">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                </div>   
                            </div> 
                            <div class="row"> 
                                <div class="col-md-6 col-sm-6 col-xs-6">      
                                    <div class="form-group">
                                    <label class="control-label " for="cmdp">&nbsp;</label>
                                        <div class="input-file-container bg-info">
                                            <input class="input-file @error('avatars') is-invalid @enderror" id="file" type="file" name="avatars">
                                            <label for="my-file" class="input-file-trigger" tabindex="0">
                                                Selectioner un fichier...
                                            </label>
                                        </div>
                                        <div>
                                            <p class="file-return"></p>                            
                                                @error('avatars')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div> 
                                </div>  
                                <div class="col-md-6 col-sm-6 col-xs-6">   
                                    <div class="form-group">
                                        <label class="control-label " for="role">{{ __('Role') }}</label>
                                        <select class="form-control" name="role" id="role">
                                            <option row="5">admin</option>
                                            <option row="5">Superviseur</option>
                                            <option row="5">Utilisateur</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center pt-4">
                                <button type="submit" class="text-weight-bolder btn btn-info " name="signup" value="Sign up">S'enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
    </div>   
</div>












@endsection