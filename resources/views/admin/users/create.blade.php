@extends('admin.app.app')

@section('title') | Ajouter un membre @endsection

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users edit start -->
                <section class="users-edit">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                            <h3 class="d-none d-sm-block" style="color: #3C7AB3;">Créer un Utilisateur</h3>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                        <!-- users edit account form start -->
                                        <form id="signupForm" method="post" class="form-horizontal" enctype="multipart/form-data" action="{{route('home.create')}}">
                                            @csrf
                                            @method('GET')
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="fname">{{ __('Nom') }}</label>
                                                        <div class="">
                                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="fname" name="name" placeholder="name"  required data-validation-required-message="This username field is required" value="{{ old('name') }}"/>

                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
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
                                                    <div class="form-group">
                                                        <label class="control-label " for="role">{{ __('Role') }}</label>
                                                        <select class="form-control" name="role" id="role">
                                                            <option row="5">admin</option>
                                                            <option row="5">Superviseur</option>
                                                            <option row="5">Utilisateur</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="name">{{ __('Email') }}</label>
                                                        <div class="">
                                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email"  required data-validation-required-message="This email field is required" value="{{ old('name') }}"/>

                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label " for="cmdp">{{ __('Confirmer le mot de passe') }}</label>
                                                        <div class="">
                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                        </div>
                                                    </div>
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
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                        Changes</button>
                                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                                </div>
                                        </form>
                                        <!-- users edit account form ends -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection