@extends('admin.app')

@section('title') | Ajouter un membre @endsection

@section('content')
<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="row fielset formavlidation-wrapper m-auto justify-content-center">
    <div class="col-md-10">
        <div class="card card-statistics">
            <div class="card-header">
                <div class="card-heading">
                    <h4 class="card-title"><h3 class="m-0 font-weight-bold text-info">Créer un membre</h3>
                </div>
            </div>
            <div class="card-body">
                <form id="signupForm" method="post" class="form-horizontal" action="{{ route('home.create') }}">
                    @csrf
                    @method('GET')
                    <div class="form-group">
                        <label class="control-label " for="fname">{{ __('Nom') }}</label>
                        <div class="mb-2">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="fname" name="name" placeholder="Nom" value="{{ old('name') }}"/>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label " for="uemail">{{ __('Email') }}</label>
                        <div class="mb-2">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="uemail" name="email" placeholder="Email" value="{{ old('email') }}"/>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label " for="mdp">{{ __('Mot de passe') }}</label>
                        <div class="mb-2">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label " for="cmdp">{{ __('Confirmer le mot de passe') }}</label>
                        <div class="mb-2">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label " for="role">{{ __('Role') }}</label>
                        <div class="mb-2">
                        <div class="mb-2">
                            <select class="form-control" name="role" id="role">
                                <option row="5">admin</option>
                                <option row="5">Superviseur</option>
                                <option row="5">Utilisateur</option>
                            </select>
                        </div>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="text-weight-bolder btn btn-info" name="signup" value="Sign up">S'enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
		</div>
	</div>
</div>












@endsection