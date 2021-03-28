


@extends('admin.app.formWizard')

@section('title') | Ajouter un membre @endsection

@section('content')




<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
                <!-- Form wizard with step validation section start -->
                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                            <h3 class="d-none d-sm-block" style="color: #3C7AB3;">Modifier Ecole  {{$school->name}}</h3>
                                        </a>
                                    </li>
                                </ul>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="{{route('school.update' , $school)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <!-- Step 1 -->
                                                <section id="step1">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label" for="fname">{{ __('Nom') }}</label>
                                                                <div class="">
                                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required placeholder="Nom"  required value="{{  old('name') ?? $school->name}}"/>
                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label " for="mdp">{{ __('Address') }}</label>
                                                                <div class="">
                                                                    <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="new-address" required value="{{  old('name') ?? $school->address}}">

                                                                    @error('address')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label " for="description">{{ __('Description') }}</label>
                                                                <div class="">
                                                                    <textarea type="description" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="description" value="{{ old('name') ?? $school->description}}" cols="50" rows="30" required ></textarea>
                                                                    @error('description')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                <button class="btn btn-primary btn-lg mt-3" style="float: right;" id="Next">{{ __('Next') }}</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            <!-- Step 2 -->
                                                <section id="step2">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label " for="Devenir">{{ __('Devenir') }}</label>
                                                                <div class="">
                                                                    <input type="Devenir" class="form-control @error('Devenir') is-invalid @enderror" id="devenir" name="Devenir" placeholder="Devenir" required value="{{  old('name') ?? $school->devenir}}/>

                                                                    @error('Devenir')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label " for="role">{{ __('Ville de résidence') }}</label>
                                                                <select class="form-control" name="ville" id="ville">
                                                                    <option row="5">Douala</option>
                                                                    <option row="5">Yaoundé</option>
                                                                    <option row="5">Bamenda</option>
                                                                    <option row="5">Bafousam</option>
                                                                </select>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label " for="localisation">{{ __('Localisation') }}</label>
                                                                <div class="">
                                                                    <textarea id="localisation" type="text" class="form-control" name="localisation" required autocomplete="" cols="50" rows="50" value="{{  old('name') ?? $school->localisation}}"></textarea>
                                                                </div>
                                                            </div>     
                                                            <button class="btn btn-primary btn-lg mt-3" style="float:right;" id="next">{{ __('next') }}</button>
                                                            <button class="btn btn-primary btn-lg mt-3" style="float:left; margin-right:40%;" id="prev">{{ __('prev') }}</button>
                                                        </div>
                                                    </div>
                                                </section>
                                            <!-- Step 3 -->
                                                <section id="step3">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label " for="role">{{ __("Type d'université") }}</label>
                                                                <select class="form-control" name="TypeUniversité" id="role">
                                                                    <option row="5">Université d'Etat</option>
                                                                    <option row="5">Université privée</option>
                                                                </select>
                                                            </div>
                                                        </div>    
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label " for="role">{{ __('Filiéres') }}</label>
                                                                <div id="myselect">
                                                                    <select id="multiselect" name="filiéres[]" multiple="multiple">
                                                                        @foreach($filiéres as $filiére)
                                                                            <option  value="{{$filiére->id}}" >{{$filiére->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label " for="cmdp">&nbsp;</label>
                                                                <div class="input-file-container bg-info">
                                                                    <input  class="input-file @error('logo') is-invalid @enderror" id="my-file" type="file" name="logo" required>
                                                                    <label for="logo" class="input-file-trigger" tabindex="0">
                                                                        Selectioner le logo...
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <p class="file-return"></p>                            
                                                                    @error('logo')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>       
                                                            <button type="submit" class="btn btn-primary btn-lg mt-3" id="save" style="height: 40px;" name="signup" value="Sign up">S'enregistrer</button>
                                                            <button class="btn btn-primary btn-lg mt-3"  style="float: left; margin-right:40%;" id="Prev">{{ __('Prev') }}</button>
                                                                
                                                        </div>
                                                    </div>
                                                </section>    
                                                <!-- <div class="row">
                                                    <div class="col-md-6">
                                                    <div class="container">
                                                        <div class="container-box rotated">
                                                            <button type="button" class="btn btn-info btn-lg turned-button" data-toggle="modal" data-target="#myModal">Ajouter une filiére</button>
                                                        </div>
                                                        <div id="myModal" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header" style="display:inline-block;">
                                                                        <button type="button" class="close" style="" data-dismiss="modal">&times;</button>
                                                                        <h4 class="modal-title">
                                                                            Ajouter la filiére souhaité
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form role="form" method="post" id="reused_form" >
                                                                            <div class="form-group">
                                                                                <label for="name"> Name:</label>
                                                                                <input type="text" class="form-control" id="name" name="name" required maxlength="50">
                                                                            </div>
                                                                            <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Post It! &rarr;</button>
                                                                        </form>
                                                                        <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                                                                        <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                             -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection