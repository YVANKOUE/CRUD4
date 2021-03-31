@extends('admin.app.app')

@section('title') | Utilisateurs @endsection

@section('content')
	<!-- BEGIN: Content-->
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <a href="{{route('admin.users.create')}}" class="btn row mb-5" style="height: 50px; padding-bottom:20px;"><button class="btn btn-primary btn-lg ml-4 ajout d-md-block d-none"> Ajouter un utilisateur</button></a>           
       
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">         
                                            <table class="table table-striped dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                        <th data-field = "id" >#</th>
                                                        <th data-field = "nom">Nom</th>
                                                        <th data-field = "email">Email</th>
                                                        <th class=" d-none d-md-block d-sm-block" data-field = "rôles">Rôles</th>
                                                        <th data-field = "action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th data-field = "id">#</th>
                                                        <th data-field = "nom">Nom</th>
                                                        <th data-field = "email">Email</th>
                                                        <th class=" d-none d-md-block d-sm-block" data-field = "rôles">Rôles</th>
                                                        <th  data-field = "action">Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach ($users as $user)
                                                        <tr>
                                                            <td>{{ $user->id }}</td>
                                                            <td>{{ $user->name }}</td>
                                                            <td>{{ $user->email }}</td>
                                                            <td class=" d-none d-md-block d-sm-block" >{{implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('admin.users.show', $user->id)}}"><button class="btn btn-warning" title="Consulter" ><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                                <span id="idElement">&nbsp;</span>
                                                                @can('edit-users')
                                                                    <a href="{{ route('admin.users.edit', $user->id)}}" class="d-none d-md-inline" title="Modifier"><button class="btn btn-success" ><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                                                                @endcan
                                                                @can('delete-users')
                                                                    <form action="{{route('admin.users.destroy', $user->id)}}"  method="post" class="d-inline">
                                                                        @csrf 
                                                                @method('DELETE')
                                                                        <button class="btn btn-danger"  title="Supprimer" ><i class="feather icon-trash-2" aria-hidden="true"></i></button>
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
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection
