@extends('admin.app.appp')

@section('title') | Ajouter un membre @endsection

@section('content')
<div class="main-container" style="margin-top: -35px;">
	<div class="pd-ltr-20">
		<div class="row fielset formavlidation-wrapper m-auto justify-content-center">
            <div class="col-md-12">
                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading" >
                            <h4 class="card-title"><h3 class="m-0 font-weight-bold text-info">Créer une ecole</h3>
                         </div>
                    </div>
                    <div class="card-body ">
                        <form  id="signupForm" method="post" class="form-horizontal" action="{{ route('school.create')}}">
                            @csrf
                            @method('GET')
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4">
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
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="form-group">
                                        <label class="control-label " for="mdp">{{ __('Address') }}</label>
                                        <div class="">
                                            <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="new-address">

                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">      
                                    <div class="form-group">
                                    <label class="control-label " for="cmdp">&nbsp;</label>
                                        <div class="input-file-container bg-info">
                                            <input class="input-file @error('logo') is-invalid @enderror" id="my-file" type="file" name="logo">
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
                                </div> 
                            </div> 
                            <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="form-group">
                                        <label class="control-label " for="Devenir">{{ __('Devenir') }}</label>
                                        <div class="">
                                            <input type="Devenir" class="form-control @error('Devenir') is-invalid @enderror" id="uDevenir" name="Devenir" placeholder="Devenir" value="{{ old('Devenir') }}"/>

                                            @error('Devenir')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">   
                                    <div class="form-group">
                                        <label class="control-label " for="role">{{ __('Ville de résidence') }}</label>
                                        <select class="form-control" name="ville" id="role">
                                            <option row="5">Douala</option>
                                            <option row="5">Yaoundé</option>
                                            <option row="5">Bamenda</option>
                                            <option row="5">Bafousam</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-md-4 col-sm-4 col-xs-4">   
                                    <div class="form-group">
                                        <label class="control-label " for="role">{{ __("Type d'université") }}</label>
                                        <select class="form-control" name="TypeUniversité" id="role">
                                            <option row="5">Université d'Etat</option>
                                            <option row="5">Université privée</option>
                                        </select>
                                    </div>
                                </div>
                            </div> 
                            <div class="row"> 
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="form-group">
                                        <label class="control-label " for="description">{{ __('Description') }}</label>
                                        <div class="">
                                            <textarea type="description" class="form-control @error('description') is-invalid @enderror" id="udescription" name="description" placeholder="description" value="{{ old('description')}}" cols="50" rows="50"></textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="form-group">
                                        <label class="control-label " for="localisation">{{ __('Localisation') }}</label>
                                        <div class="">
                                            <textarea id="localisation" type="text" class="form-control" name="localisation" required autocomplete="" cols="50" rows="50"></textarea>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-4 col-sm-4 col-xs-4">   
                                    <div class="form-group">
                                        <label class="control-label " for="role">{{ __('Filiéres') }}</label>
                                        <div id="myselect">
                                            <select id="multiselect" name="filiéres[]" multiple="multiple">
                                                @foreach($filiéres as $filiére)
                                                    <option value="{{$filiére->id}}" >{{$filiére->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="container-box rotated">
                                            <button type="button" class="btn btn-info btn-lg turned-button" data-toggle="modal" data-target="#myModal">Ajouter une filiére</button>
                                        </div>
                                        <!-- Modal -->
                                            <div id="myModal" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- Modal content-->
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
                            </div>
                            <div class="text-center pt-2 ">
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