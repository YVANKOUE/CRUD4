@extends('admin.appp')

@section('title') | Ajouter un membre @endsection

@section('content')
<br>
<div class="main-container" style="margin-top: -35px;">
	<div class="pd-ltr-20">
		<div class="row fielset formavlidation-wrapper m-auto justify-content-center">
            <div class="col-md-10">
                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading" >
                            <h4 class="card-title"><h3 class="m-0 font-weight-bold text-info">Créer un membre</h3>
                         </div>
                    </div>
                    <div class="card-body ">
                    <form action="{{route('school.update' , $school)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label" for="fname">{{ __('Nom') }}</label>
                                        <div class="">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="fname" name="name" placeholder="Nom" value="{{  old('name') ?? $school->name}}"/>

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
                                    <label class="control-label " for="cmdp">&nbsp;</label>
                                        <div class="input-file-container bg-info">
                                            <input class="input-file @error('logo') is-invalid @enderror" id="my-file" type="file" name="logo" value="{{  old('logo') ?? $school->logo}}">
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
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label " for="mdp">{{ __('Address') }}</label>
                                        <div class="">
                                            <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="new-address" value="{{old('address') ?? $school->address}}">

                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label " for="localisation">{{ __('Localisation') }}</label>
                                        <div class="">
                                            <input id="localisation" type="text" class="form-control" name="localisation" required autocomplete="" value="{{old('localisation') ?? $school->localisation}}">
                                        </div>
                                    </div>
                                </div>   
                            </div> 
                            <div class="row"> 
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label " for="description">{{ __('Description') }}</label>
                                        <div class="">
                                            <input type="description" class="form-control @error('description') is-invalid @enderror" id="udescription" name="description" placeholder="description" value="{{old('description') ?? $school->description}}"/>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label " for="Devenir">{{ __('Devenir') }}</label>
                                        <div class="">
                                            <input type="Devenir" class="form-control @error('Devenir') is-invalid @enderror" id="uDevenir" name="Devenir" placeholder="Devenir" value="{{old('Devenir') ?? $school->Devenir}}"/>

                                            @error('Devenir')
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
                                        <label class="control-label " for="role">{{ __('Ville de résidence') }}</label>
                                        <select class="form-control" name="ville" id="role" value="{{old('TypeUniversité') ?? implode(', ', $school->city()->get()->pluck('name')->toArray()) }}">
                                            <option row="5">Douala</option>
                                            <option row="5">Yaoundé</option>
                                            <option row="5">Bamenda</option>
                                            <option row="5">Bafousam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">   
                                    <div class="form-group">
                                        <label class="control-label " for="role">{{ __("Type d'université") }}</label>
                                        <select class="form-control" name="TypeUniversité" id="role" value="{{old('TypeUniversité') ?? $school->TypeUniversité}}">
                                            <option row="5">Université d'Etat</option>
                                            <option row="5">Université privée</option>
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