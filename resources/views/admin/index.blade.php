@extends('admin.app.app')

@section('title') | Utilisateurs @endsection

@section('content')
	<div class="main-container">
		<div class="pd-ltr-20">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
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
                                        <th data-field = "id" >#</th>
                                        <th data-field = "nom">Nom</th>
                                        <th data-field = "email">Email</th>
                                        <th data-field = "rôles">Rôles</th>
                                        <th data-field = "action">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th data-field = "id">#</th>
                                        <th data-field = "nom">Nom</th>
                                        <th data-field = "email">Email</th>
                                        <th data-field = "rôles">Rôles</th>
                                        <th data-field = "action">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                            <td class="text-center">
                                            <a href="{{ route('admin.profil.show', $user->id)}}"><button class="btn btn-warning" title="Consulter" ><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <span id="idElement">&nbsp;</span>
                                            @can('edit-users')
                                                <a href="{{ route('admin.users.edit', $user->id)}}" title="Modifier"><button class="btn btn-success" ><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                                            @endcan
                                            @can('delete-users')
                                                <form action="{{route('admin.users.destroy', $user->id)}}"  method="post" class="d-inline">
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
