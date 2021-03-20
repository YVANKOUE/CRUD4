@extends('admin.app.appp')

@section('title') | Utilisateurs @endsection

@section('content')
<div class="mobile-menu-overlay"></div>
    <div class="main-container container">
        <div class="pd-ltr-20">
        @include('admin.app.nav')
            <div class="row fielset formavlidation-wrapper m-auto justify-content-center">
            <div class="col-md-10">
                <div class="card card-statistics">
                    <div class="card-header">Modifier <strong>{{$user->name}}</strong> </div>
                        <div class="card-body">
                        <form action="{{route('admin.users.update' , $user)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label  ">{{ __('nom') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-6 col-form-label  ">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')  ?? $user->email }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                         @can('delete-users')
                            @foreach($roles as $role)
                                <div class="formm-group form-check">
                                    <input type="checkbox" name="roles[]" value="{{$role->id}}" id="{{$role->id}}" class="form-check-input" @foreach($user->roles as $userRole) @if($userRole->id === $role->id) checked @endif @endforeach>
                                    <label for="{{$role->id}}" class="form-check-label">{{$role->name}}</label>
                                </div>
                            @endforeach
                        @endcan
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info font-weight-bolder">Modifier</button>
                           
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
