@extends('admin.app.app')

@section('title') | Liste Université @endsection

@section('content')
<div class="main-container ">
		<div class="pd-ltr-20">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @include('admin.app.nav')
            <!-- DataTales Example -->
            <div class="row">
                <div class="card shadow mb-4 col-md-12">
                        <div class="row card-header py-3">
                            <h3 class="text-center ml-4 font-weight-bolder text-info">Liste du Personnel</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true"  data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field = "id">logo</th>
                                            <th data-field = "nom">Nom</th>
                                            <th data-field = "ville">ville</th>
                                            <th data-field = "localisation">localisation</th>
                                            <th data-field = "devenir">Devenir</th>
                                            <th data-field = "action">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th data-field = "logo">logo</th>
                                            <th data-field = "nom">Nom</th>
                                            <th data-field = "ville">ville</th>
                                            <th data-field = "localisation">localisation</th>
                                            <th data-field = "devenir">Devenir</th>
                                            <th data-field = "action">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($schools as $school)
                                            <tr>
                                                <td>
                                                    <span class="user-icon">
                                                        <img style="height: 55px; width:52px;" src="{{asset('vendors/images/'.$school->logo)}}" alt="">
                                                    </span>
                                                </td>
                                                <td>{{ $school->name }}</td>
                                                <td>{{ implode(', ', $school->city()->get()->pluck('name')->toArray()) }}</td>
                                                <td>{{ $school->localisation }}</td>
                                                <td>{{ $school->devenir }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('school.show', $school->id)}}"><button class="btn btn-warning" title="Consulter" ><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                    <span id="idElement">&nbsp;</span>
                                                    @can('edit-users')
                                                        <a href="{{ route('school.edit', $school->id)}}" title="Modifier"><button class="btn btn-success" ><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                                                    @endcan  
                                                    @can('delete-users')
                                                        <form action="{{route('school.destroy', $school->id)}}"  method="post" class="d-inline">
                                                            @csrf 
                                                            @method('DELETE')
                                                            <button class="btn btn-danger"  title="Supprimer" ><i class="fas fa-user-slash" aria-hidden="true"></i></button>
                                                        </form>
                                                    @endcan
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                               </table>
                            </div>
                        </div>
                </div>
            </div>
	    </div>
    </div>
@endsection